<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="bg-amber-50">
    <x-homepage-navbar />
    <section class="py-10 px-4 mx-auto max-w-screen-lg">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-6xl">Katalog Harga &Jasa</h1>
          <p class="mb-8 text-lg font-normal text-gray-600 lg:text-xl sm:px-16 xl:px-48">"Berikut Pilihan Terbaik Peti Jenazah untuk Layanan Kedukaan yang Memuaskan Pilihan Model Bunga yang Kami Tawarkan Dan Berbagai Macam Jenis Layanan Kedukaan yang Gloria Sediakan.</p>
      </div>
      <div class="container mx-auto p-4">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
            <!-- Produk A -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex justify-center">
                        <img class="w-full max-w-md" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="Produk A" />
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Peti A</h2>
                        <p class="text-2xl font-extrabold text-gray-900">Rp.2.300.000</p>
                        <hr class="my-4 border-gray-200" />
                        <p class="text-gray-500">Studio quality three mic array for crystal clear calls and voice recordings. Six-speaker sound system for a remarkably robust and high-quality audio experience.</p>
                    </div>
                </div>
            </div>
            
            <!-- Produk B -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex justify-center">
                        <img class="w-full max-w-md" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="Produk B" />
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Peti B</h2>
                        <p class="text-2xl font-extrabold text-gray-900">Rp.1.999.999</p>
                        <hr class="my-4 border-gray-200" />
                        <p class="text-gray-500">Studio quality three mic array for crystal clear calls and voice recordings. Six-speaker sound system for a remarkably robust and high-quality audio experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="py-10 px-4 mx-auto max-w-screen-lg">
      <div class="text-center mb-10">
          <h2 class="text-3xl font-bold text-gray-900">Pilih Paket Terbaik</h2>
          <p class="text-gray-600 mt-1">Pilih paket sesuai kebutuhan Anda.</p>
      </div>
      
      <!-- Pricing Cards Container -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <!-- Basic Plan -->
          <div class="bg-white rounded-lg shadow p-5 border border-gray-200 text-center">
              <h3 class="text-xl font-semibold text-gray-800">Basic</h3>
              <p class="text-gray-500 mt-1">Untuk pemula</p>
              <div class="mt-4 text-3xl font-bold text-gray-900">$19<span class="text-sm font-normal">/bln</span></div>
              <ul class="mt-4 space-y-2 text-gray-600 text-sm">
                  <li>✔ 10 GB Penyimpanan</li>
                  <li>✔ 1 Pengguna</li>
                  <li>✔ Support Email</li>
              </ul>
              {{-- <a href="#" class="block mt-4 bg-blue-600 text-white font-semibold py-2 px-3 rounded-md hover:bg-blue-700">Pilih</a> --}}
          </div>

          <!-- Standard Plan -->
          <div class="bg-white rounded-lg shadow p-5 border border-gray-200 text-center">
              <h3 class="text-xl font-semibold text-gray-800">Standard</h3>
              <p class="text-gray-500 mt-1">Pilihan populer</p>
              <div class="mt-4 text-3xl font-bold text-gray-900">$49<span class="text-sm font-normal">/bln</span></div>
              <ul class="mt-4 space-y-2 text-gray-600 text-sm">
                  <li>✔ 50 GB Penyimpanan</li>
                  <li>✔ 5 Pengguna</li>
                  <li>✔ Prioritas Support</li>
              </ul>
              {{-- <a href="#" class="block mt-4 bg-green-600 text-white font-semibold py-2 px-3 rounded-md hover:bg-green-700">Pilih</a> --}}
          </div>

          <!-- Premium Plan -->
          <div class="bg-white rounded-lg shadow p-5 border border-gray-200 text-center">
              <h3 class="text-xl font-semibold text-gray-800">Premium</h3>
              <p class="text-gray-500 mt-1">Fitur lengkap</p>
              <div class="mt-4 text-3xl font-bold text-gray-900">$99<span class="text-sm font-normal">/bln</span></div>
              <ul class="mt-4 space-y-2 text-gray-600 text-sm">
                  <li>✔ 200 GB Penyimpanan</li>
                  <li>✔ 20 Pengguna</li>
                  <li>✔ Support 24/7</li>
              </ul>
              {{-- <a href="#" class="block mt-4 bg-purple-600 text-white font-semibold py-2 px-3 rounded-md hover:bg-purple-700">Pilih</a> --}}
          </div>
      </div>
    </section>
    <x-homepage-footer />
  </body>
</html>
