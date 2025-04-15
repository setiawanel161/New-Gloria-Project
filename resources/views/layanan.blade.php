<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gloria Funeral</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
  <x-new-hompage-navbar />

  <main class="main" style="padding-top: 50px;">
    <section id="pricing" class="pricing section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Product</h2>
        <p>Ours product</p>
      </div>
      <div class="container">
        <div class="row gy-3 justify-content-left">
          @foreach($products as $product)
          <div class="col-xl-3 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item h-100 d-flex flex-column">
              <h3>{{ $product->name }}</h3>
              <div class="post-img">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
              </div>
              <ul class="text-start">
                <li>Jenis Kayu: {{ $product->wood_type }}</li>
                @if(!empty($product->price))
                <li><i>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</i></li>
                @else
                <li><i>Tanyakan Harga</i></li>
                    @endif
              </ul>
              <div class="mt-auto d-flex justify-content-center gap-2">
                <button type="button" class="btn btn-outline-secondary block" data-bs-toggle="modal" data-bs-target="#modal-{{ $product->id }}">
                  Description
                </button>
                <div class="modal fade" id="modal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="modalTitle-{{ $product->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle-{{ $product->id }}">Description</h5>
                      </div>
                      <div class="modal-body text-start">
                        <p>{{ $product->details }}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="#" class="btn-buy"><i class="bi bi-cart-plus"> Buy Now</i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="#" class="btn-buy"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section id="pricing" class="pricing section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Harga Layanan</h2>
        <p>Paket layanan yang tersedia</p>
      </div>

      <div class="container">
        <div class="swiper-container" id="tinderSlider">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="pricing-item">
                <span class="small d-block mb-2 advanced">Mulai dari</span>
                <h3 class="fw-bold">Super Ekonomis</h3>
                <h4 class="text-primary"><sup>Rp</sup>3.800.000</h4>
                <ul class="mt-3">
                  <li>Peti smokan</li>
                  <li>Mobil Jenazah 2x pengantaran dalam kota</li>
                  <li>Kaos kaki & Sarung tangan</li>
                  <li>Sekrup 6 buah</li>
                  <li>Kain tule & Kapur barus</li>
                  <li>Kayu Nisan Salib</li>
                  <li>Bunga meja lilin & Bunga Salib</li>
                  <li>Bunga tabur 2 keranjang</li>
                  <li>Memandikan & merias jenazah</li>
                </ul>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div class="pricing-item">
                <span class="small d-block mb-2 advanced">Mulai dari</span>
                <h3 class="fw-bold">Ekonomi</h3>
                <h4 class="text-primary"><sup>Rp</sup>6.800.000</h4>
                <ul class="mt-3">
                  <li>Peti Standar Coklat Plitur</li>
                  <li>Mobil Jenazah 2x pengantaran dalam kota</li>
                  <li>Kain Tule, Kapur barus</li>
                  <li>Bunga meja 2 buah & Bunga Salib</li>
                  <li>Bunga tabur 2 keranjang</li>
                  <li>Kaos kaki & Sarung tangan jenazah</li>
                  <li>Memandikan & merias jenazah</li>
                  <li>Kayu Nisan Salib</li>
                  <li>Bantal guling</li>
                </ul>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
              <div class="pricing-item">
                <h3 class="fw-bold">Standard</h3>
                <h4 class="text-warning">Tanyakan Harga</h4>
                <ul class="mt-3">
                  <li>Peti Jenazah Coklat/Putih Perjamuan</li>
                  <li>Mobil Jenazah 2x pengantaran dalam kota</li>
                  <li>Bunga meja 2 buah & Bunga Salib</li>
                  <li>Bunga tangan & Bunga tabur 2 keranjang</li>
                  <li>Kayu Nisan Salib</li>
                  <li>Kaos kaki & Sarung tangan jenazah</li>
                  <li>Kapur barus, Kain Tule</li>
                  <li>Memandikan & merias jenazah</li>
                  <li>Bantal, Guling</li>
                  <li>Air mineral 2 dus & Permen 2 bungkus</li>
                </ul>
              </div>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
              <div class="pricing-item">
                <h3 class="fw-bold">Premium</h3>
                <h4 class="text-warning">Tanyakan Harga</h4>
                <ul class="mt-3">
                  <li>Peti Jenazah Diplomat Perjamuan Kudus Handle Standar</li>
                  <li>Mobil Jenazah 2x pengantaran dalam kota</li>
                  <li>Bunga meja 2 buah</li>
                  <li>Bunga salib 1 buah</li>
                  <li>Bunga tangan</li>
                  <li>Bunga tabur 6 keranjang</li>
                  <li>Bunga atas peti</li>
                  <li>Kayu Nisan Salib</li>
                  <li>Kaos kaki dan sarung tangan jenazah</li>
                  <li>Memandikan dan merias jenazah</li>
                  <li>Kapur barus</li>
                  <li>Bantal, Guling dan Kain Tule</li>
                  <li>Air mineral 2 dus dan permen 2 bungkus</li>
                </ul>
              </div>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide">
              <div class="pricing-item">
                <h3 class="fw-bold">Eksekutif 1</h3>
                <h4 class="text-warning">Tanyakan Harga</h4>
                <ul class="mt-3">
                  <li>Peti Perjamuan Mataram</li>
                  <li>Mobil Jenazah 2x pengantaran dalam kota</li>
                  <li>Nisan Salib</li>
                  <li>Kaos tangan, kaos kaki, bantal guling, kain tule</li>
                  <li>Memandikan Jenazah</li>
                  <li>Merias Jenazah</li>
                  <li>Bunga Meja plus Lilin 2 buah</li>
                  <li>Bunga Salib</li>
                  <li>Bunga di atas peti</li>
                  <li>Bunga tabur 6 keranjang</li>
                  <li>Bunga tangan</li>
                  <li>Kapur barus</li>
                  <li>Snack 50 Dos</li>
                  <li>Air mineral 2 Dos</li>
                  <li>Permen 2 Bungkus</li>
                </ul>
              </div>
            </div>

            <!-- Slide 6 -->
            <div class="swiper-slide">
              <div class="pricing-item">
                <h3 class="fw-bold">Eksklusif 2</h3>
                <h4 class="text-warning">Tanyakan Harga</h4>
                <ul class="mt-3">
                  <li>Peti Perjamuan Eksklusif Ukir</li>
                  <li>Mobil Jenazah 2x pengantaran dalam kota</li>
                  <li>Nisan Salib</li>
                  <li>Kaos tangan, kaos kaki, bantal guling, kain tule</li>
                  <li>Memandikan Jenazah</li>
                  <li>Merias Jenazah</li>
                  <li>Bunga Meja plus Lilin 2 buah</li>
                  <li>Bunga Salib</li>
                  <li>Bunga di atas peti</li>
                  <li>Bunga tabur 6 keranjang</li>
                  <li>Bunga tangan</li>
                  <li>Kapur barus</li>
                  <li>Snack 50 Dos</li>
                  <li>Air mineral 2 Dos</li>
                  <li>Permen 2 Bungkus</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Navigasi Swiper -->
          <!-- <div class="swiper-pagination mt-4"></div> -->
        </div>
      </div>
    </section>

  </main>

  <x-new-hompage-footer />

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Include Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper('#tinderSlider', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>
</body>

</html>