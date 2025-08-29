<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data
    $nama  = htmlspecialchars($_POST['nama'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $pesan = htmlspecialchars($_POST['pesan'] ?? '');

    if ($nama && $email && $pesan) {
        // Simpan ke file (sebagai log sederhana)
        $file = fopen("messages.txt", "a");
        fwrite($file, "Nama: $nama | Email: $email | Pesan: $pesan | Tanggal: " . date("Y-m-d H:i:s") . "\n");
        fclose($file);

        echo "<script>alert('Pesan berhasil dikirim! Terima kasih $nama.'); window.location='index.php#kontak';</script>";
    } else {
        echo "<script>alert('Semua field wajib diisi!'); window.location='index.php#kontak';</script>";
    }
} else {
    header("Location: index.php#kontak");
    exit;
}
?>
