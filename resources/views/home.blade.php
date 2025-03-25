<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="bg-white-50">
    <x-homepage-navbar />

    <section>
      <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
        <div class="grid items-center gap-8 sm:gap-20 md:grid-cols-2">
          <div>
            <h2 class="mb-4 max-w-2xl text-3xl font-bold md:text-5xl md:leading-snug">
              GLORIA FUNERAL SERVICE
            </h2>
            <p class="mb-6 max-w-lg text-sm text-gray-500 sm:text-base md:mb-12">
              "Memberi Yang Terbaik Untuk Yang Terkasih" dalam mengurus segala kebutuhan terkait layanan kedukaan."
            </p>
            <a href="javascript:void(0);" class="inline-block items-center bg-black px-6 py-3 text-center font-semibold text-white">
              Layanan
            </a>
          </div>
          <div>
            <img class="rounded-lg shadow-lg mx-auto h-full w-full max-w-2xl" src="{{ asset('/images/image1.jpeg') }}" alt="Service Image" />
          </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-100">
      <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
        <div class="grid items-center gap-8 sm:gap-20 md:grid-cols-2">
          <div>
            <img class="rounded-lg shadow-lg mx-auto h-full w-full max-w-2xl" src="https://media.istockphoto.com/id/1303278663/id/foto/fasad-bangunan-modern-dengan-papan-nama-kata-rumah-sakit.jpg?s=612x612&w=0&k=20&c=nllgha0qQKLXfEKvWgxXxrTtAomNLZ5ym-Q3dvk72IU=" alt="Service Image" />
          </div>
          <div class="flex flex-col items-center">
            <h4 class="mb-4 max-w-1xl text-2xl font-bold md:text-3xl md:leading-snug">Mitra Gloria</h4>
              <p class="mb-6 max-w-lg text-sm text-gray-500 sm:text-base md:mb-12 text-center">
                "Rumah sakit terpercaya dengan fasilitas lengkap, tim profesional, layanan jenazah sesuai standar kesehatan, adat, dan kepercayaan."
              </p>
            <div class="flex flex-wrap justify-center gap-6 mt-8">
              <button onclick="changeHospital(0)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
                <div class="ml-4 flex-col">
                  <p class="font-semibold">RSPAU Dr. S. Hardjolukito</p>
                </div>
              </button>
              <button onclick="changeHospital(1)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
                <div class="ml-4 flex-col">
                  <p class="font-semibold">RS Hermina Yogya</p>
                </div>
              </button>
              <button onclick="changeHospital(2)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
                <div class="ml-4 flex-col">
                  <p class="font-semibold">RSUD Kota Yogyakarta</p>
                </div>
              </button>
              <button onclick="changeHospital(3)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
                <div class="ml-4 flex-col">
                  <p class="font-semibold">RS Sedayu General Hospital</p>
                </div>
              </button>
              <div id="mainDetail" class="text-center p-6 border rounded-lg shadow-md bg-gray-100 gap-6 mt-8">
                <h3 class="text-2xl font-bold">Pilih Mitra Rumah Sakit</h3>
                <p class="text-gray-600 mt-2">Klik salah satu mitra di bawah untuk melihat detailnya.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
        <div class="flex flex-col items-center">
          <h4 class="mb-4 max-w-1xl text-2xl font-bold md:text-3xl md:leading-snug">Layanan Gloria</h4>
          <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">
            "Layanan pemakaman lengkap, profesional, dan penuh kepedulian, mulai dari peti jenazah hingga prosesi penghormatan terakhir."
          </p>
        </div>
        <div class="grid items-center gap-8 sm:gap-20 md:grid-cols-2">
          <div class="flex flex-wrap justify-center gap-6">
            <button onclick="changeService(0)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
            <div class="ml-4 flex-col">
              <p class="font-semibold">Penjualan Peti Jenazah</p>
            </div>
            </button>
            <button onclick="changeService(1)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
              <div class="ml-4 flex-col">
                <p class="font-semibold">Pemandian dan Periasan Jenazah</p>
              </div>
            </button>
            <button onclick="changeService(2)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
              <div class="ml-4 flex-col">
                <p class="font-semibold">Ambulance Mobil Jenazah</p>
              </div>
            </button>
            <button onclick="changeService(3)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
              <div class="ml-4 flex-col">
                <p class="font-semibold">Bunga & Dekorasi</p>
              </div>
            </button>
            <button onclick="changeService(4)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
              <div class="ml-4 flex-col">
                <p class="font-semibold">Paket Kedukaan</p>
              </div>
            </button>
            <button onclick="changeService(5)" class="flex w-[250px] rounded-md p-4 text-gray-500 shadow-lg hover:bg-gray-100 transition">
              <div class="ml-4 flex-col">
                <p class="font-semibold">Pengawetan dan Formalin Jenazah</p>
              </div>
            </button>
          </div>
          <div id="service-detail" class="flex flex-col items-center">
            <img id="service-image" class="inline-block w-full max-w-lg h-auto object-cover rounded-lg" src="https://media.istockphoto.com/id/1408857410/id/foto/toko-menjual-peti-mati-dan-karangan-bunga-pemakaman.jpg?s=612x612&w=0&k=20&c=0KA1ykRrwt8Iy6sb6tHuBrg-iaM6002s7iuHr1fr-80=" alt="Service Image" />
            <p id="service-description" class="mt-4 text-center text-gray-500">Pilih layanan untuk melihat detail.</p>
          </div>
        </div>
      </div>
    </section>

    <script>
      const services = [
        {
          image: "{{ asset('/images/image2.jpeg') }}",
          description: "Kami menyediakan peti jenazah berkualitas dengan berbagai pilihan material."
        },
        {
          image: "https://media.istockphoto.com/id/613137268/id/foto/meja-otopsi-di-kamar-mayat.jpg?s=612x612&w=0&k=20&c=_rv1m8-lWIWQloVKrwCHiQF3Nr55m4xZfCXZDoUEsFc=",
          description: "Layanan pemandian dan periasan jenazah yang profesional dan penuh hormat."
        },
        {
          image: "https://media.istockphoto.com/id/179221294/id/foto/peti-mati-di-herse.jpg?s=612x612&w=0&k=20&c=UGoElzQrdIKP-UkL4nHdK0_8DGBpi0bArgGCLtj3lN0=",
          description: "Ambulance khusus jenazah untuk keperluan transportasi dengan aman dan nyaman."
        },
        {
          image: "https://media.istockphoto.com/id/468455195/id/foto/peti-mati-putih-dengan-bunga-simpati-merah-muda.jpg?s=612x612&w=0&k=20&c=tatFF3CQOtRWWApVQBGneICuSL8gJqDK6a1Wj42vtbM=",
          description: "Berbagai pilihan bunga dan dekorasi untuk menghormati kepergian orang terkasih."
        },
        {
          image: "https://media.istockphoto.com/id/480113137/id/foto/peti-mati-putih-karangan-bunga-di-gereja-katolik.jpg?s=612x612&w=0&k=20&c=yLBHEhXVHmausa1RbYUQ2s1dAqhPm1cA2uhS1Bfo0co=",
          description: "Paket lengkap untuk prosesi kedukaan dengan layanan terbaik."
        },
        {
          image: "https://media.istockphoto.com/id/174617226/id/foto/cairan-pembalseman.jpg?s=612x612&w=0&k=20&c=jv0_JtWUICpcoz1O_Ja5vGQhO936BQ7CqST41FsOm6k=",
          description: "Layanan pengawetan jenazah dengan formalin yang aman dan sesuai prosedur."
        }
      ];

      function changeService(id) {
        document.getElementById("service-image").src = services[id].image;
        document.getElementById("service-image").classList.add("rounded-lg");
        document.getElementById("service-description").textContent = services[id].description;
      }
    </script>

    <script>
      const hospitals = [
        {
          name: "RSPAU Dr. S. Hardjolukito",
          detail: "JL. Janti Yogyakarta, Lanud Adisutjipto, Jl. Ringroad Timur, Karang Janbe, Banguntapan, Bantul, DIY 55198"
        },
        {
          name: "RS Hermina Yogya",
          detail: "Jl. Selokan Mataram, RT.06/RW.50, Meguwo, Maguwoharjo, Kec. Depok, Sleman, DIY 55282"
        },
        {
          name: "RSUD Kota Yogyakarta",
          detail: "Jl. Ki Ageng Pemanahan No.1-6, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, DIY 55162"
        },
        {
          name: "RS Sedayu General Hospital",
          detail: "Jl. Wates, Surobayan, Argomulyo, Kec. Sedayu, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55752"
        }
      ];

      function changeHospital(index) {
        document.getElementById("mainDetail").innerHTML = `
          <h3 class="text-2xl font-bold">${hospitals[index].name}</h3>
          <p class="text-gray-600 mt-2">${hospitals[index].detail}</p>
        `;
      }
    </script>
    <x-homepage-footer />
  </body>
</html>
