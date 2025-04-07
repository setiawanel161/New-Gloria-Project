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

  <main class="main">
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
                <li>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</li>
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
                <a href="#" class="btn-buy"><i class="bi bi-cart-plus"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section id="pricing" class="pricing section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Pricing</h2>
            <p>What they are saying about us</p>
        </div>

        <div class="container">
            <div class="row gy-3 justify-content-center"> <!-- Tambahkan justify-content-center -->

            <!-- Economy Plan -->
            <div class="col-xl-3 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-item featured h-100 d-flex flex-column"> <!-- Tambahkan d-flex flex-column -->
                <h3>Economy</h3>
                <h4><sup>Rp</sup>6.300.000</h4>
                <ul>
                    <li>Mobil Jenazah dalam kota</li>
                    <li>Peti Jenazah Coklat Pitur</li>
                    <li>Kain Tule</li>
                    <li>Bunga Meja 2 Buah</li>
                    <li>Bunga Salib 1 Buah</li>
                    <li>Bunga Tabur 2 Keranjang</li>
                    <li>Kaos Kaki dan Sarung tangan Jenazah</li>
                    <li>Memandikan dan Merias Jenazah</li>
                    <li>Kayu Nisan Salib</li>
                    <li>Kapur Barus</li>
                    <li>Bantal Guling</li>
                </ul>
                <div class="btn-wrap mt-auto"> <!-- Tambahkan mt-auto -->
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
                </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-xl-3 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="pricing-item h-100 d-flex flex-column">
                <h3>Standard</h3>
                <h4><sup>Rp</sup>7.800.000</h4>
                <ul>
                    <li>Mobil Jenazah dalam kota</li>
                    <li>Peti Jenazah Coklat Perjamuan</li>
                    <li>Bunga Meja 2 Buah</li>
                    <li>Bunga Salib 1 Buah</li>
                    <li>Bunga Tangan</li>                
                    <li>Bunga Tabur 2 Keranjang</li>
                    <li>Kaos Kaki dan Sarung tangan Jenazah</li>
                    <li>Memandikan dan Merias Jenazah</li>
                    <li>Kayu Nisan Salib</li>
                    <li>Kapur Barus</li>
                    <li>Air Mineral 2 Dus</li>
                    <li>Permen 2 Bungkus</li>
                    <li>Bantal Guling dan Kain Tule</li>
                </ul>
                <div class="btn-wrap mt-auto">
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
                </div>
            </div>

            <!-- VIP Plan -->
            <div class="col-xl-3 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="pricing-item h-100 d-flex flex-column">
                <span class="advanced">Advanced</span>
                <h3>VIP</h3>
                <h4><sup>Rp</sup>14.800.000</h4>
                <ul>
                    <li>Mobil Jenazah dalam kota</li>
                    <li>Peti Jenazah Ekslusif Putih Perjamuan Handle</li>
                    <li>Bunga Meja 2 Buah</li>
                    <li>Bunga Salib 1 Buah</li>
                    <li>Bunga Tangan</li> 
                    <li>Bunga Atas Peti</li>                 
                    <li>Bunga Tabur 6 Keranjang</li>
                    <li>Kaos Kaki dan Sarung tangan Jenazah</li>
                    <li>Memandikan dan Merias Jenazah</li>
                    <li>Kayu Nisan Salib</li>
                    <li>Kapur Barus</li>
                    <li>Air Mineral 2 Dus</li>
                    <li>Permen 2 Bungkus</li>
                    <li>Bantal Guling dan Kain Tule</li>
                </ul>
                <div class="btn-wrap mt-auto">
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
                </div>
            </div>

            </div>
        </div>
    </section>

  </main>

  <x-new-hompage-footer />

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>