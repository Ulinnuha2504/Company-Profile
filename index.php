<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cipta Web Indonesia</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Header -->
  <header class="flex justify-between items-center p-6 bg-green-100 shadow-md sticky top-0 z-50">
    <h1 class="text-2xl font-bold text-green-700">Cipta Web Indonesia</h1>
    <nav class="space-x-4">
      <a href="#tentang" class="text-gray-700 hover:text-green-600">Tentang</a>
      <a href="#visi" class="text-gray-700 hover:text-green-600">Visi</a>
      <a href="#misi" class="text-gray-700 hover:text-green-600">Misi</a>
      <a href="#kontak" class="text-gray-700 hover:text-green-600">Kontak</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="text-center py-20 bg-green-50 px-4">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-green-800">Mitra Digital untuk Bisnis Anda</h2>
    <p class="text-lg mb-6 text-gray-600 max-w-xl mx-auto">
      Cipta Web Indonesia hadir untuk membantu UMKM, startup, dan organisasi membangun website profesional yang menarik, cepat, dan mudah digunakan.
    </p>
    <button class="bg-green-600 text-white px-8 py-3 rounded-full hover:bg-green-700 transition">Pelajari Layanan</button>
  </section>

  <!-- Tentang -->
  <section id="tentang" class="py-16 px-6 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-center">
      <img src="assets/images/logo.png" alt="Cipta Web" class="rounded-xl shadow-lg">
      <div>
        <h3 class="text-3xl font-semibold text-green-800 mb-4">Tentang Kami</h3>
        <p class="text-gray-700 mb-4">
          Cipta Web Indonesia adalah penyedia layanan pembuatan website profesional untuk mendukung bisnis dan organisasi di era digital. 
          Kami mengutamakan desain modern, performa cepat, dan pengalaman pengguna yang optimal.
        </p>
        <ul class="list-disc list-inside text-gray-700">
          <li>Solusi website terjangkau & berkualitas</li>
          <li>Mendukung UMKM & startup berkembang online</li>
          <li>Layanan ramah & profesional</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Visi -->
  <section id="visi" class="bg-green-50 py-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h3 class="text-3xl font-semibold text-green-800 mb-10">Visi Kami</h3>
      <div class="p-6 bg-white rounded-xl shadow mx-auto max-w-2xl">
        <p class="text-gray-700">
          Menjadi mitra terpercaya dalam membantu bisnis berkembang melalui teknologi digital.
        </p>
      </div>
    </div>
  </section>

  <!-- Misi -->
  <section id="misi" class="py-16 px-6 bg-white">
    <div class="max-w-5xl mx-auto text-center">
      <h3 class="text-3xl font-semibold text-green-800 mb-10">Misi Kami</h3>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-green-50 p-6 rounded-xl shadow">
          <p class="text-sm text-gray-700 mb-4">Memberikan solusi website yang terjangkau dan berkualitas.</p>
        </div>
        <div class="bg-green-50 p-6 rounded-xl shadow">
          <p class="text-sm text-gray-700 mb-4">Membantu UMKM meningkatkan visibilitas online.</p>
        </div>
        <div class="bg-green-50 p-6 rounded-xl shadow">
          <p class="text-sm text-gray-700 mb-4">Memberikan layanan purna jual yang ramah dan profesional.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="py-16 px-6 bg-green-50">
    <div class="max-w-xl mx-auto text-center">
      <h3 class="text-3xl font-semibold text-green-800 mb-6">Hubungi Kami</h3>
      <form action="process_contact.php" method="POST" class="space-y-4">
        <input type="text" name="nama" placeholder="Nama Anda" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-600" required>
        <input type="email" name="email" placeholder="Email Anda" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-600" required>
        <textarea name="pesan" placeholder="Pesan Anda" rows="4" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-600" required></textarea>
        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">Kirim</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-green-100 text-center py-6">
    <p class="text-sm text-gray-700">© 2025 Cipta Web Indonesia. Semua Hak Dilindungi.</p>
    <div class="mt-2 space-x-4">
      <a href="#" class="text-green-700 hover:underline">Instagram</a>
      <a href="#" class="text-green-700 hover:underline">Facebook</a>
      <a href="#" class="text-green-700 hover:underline">WhatsApp</a>
    </div>
  </footer>

</body>
</html>
