<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wisata Bandung</title>
  <link rel="short icon" type="image/png" href="favicomatic/favicon-32x32.png" sizes="32x32"/>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <style>
    .banner-image {
      background-image: url('img/Home.jpg');
      background-size: cover;
    }
  </style>
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="fw-bold navbar-brand" href="index.php">Wisata Bandung</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="fw-bold nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link active" href="destinasi.php">Destinasi</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="kontak.php">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="./Admin Aplikasi Wisata Bandung/login.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <!-- Banner Image  -->
  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="text-white fw-bold">Bandung</h1>
    </div>
  </div>
  <!-- Banner Akhir Image -->

  <!-- Destinasi Wisata -->
  <section id="Menu">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col mt-5">
          <h2>Tempat Wisata</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500">
            <img src="img/braga/4.jpg" class="card-img-top" alt="Braga"/>
            <div class="card-body">
              <p class="card-text">
                <center>
                  <h3>
                    <p class="fw-bold">Braga</p>
                  </h3>
                </center>
              <p class="lh-base"> Jl. Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat.
              <p>
                <a href="Braga.php" class="btn btn-primary">Info Selengkapnya</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
            <img src="img/Saung Angklung Udjo/1.jpg" class="card-img-top" alt="Saung Angklung Udjo"/>
            <div class="card-body">
              <p class="card-text">
                <center>
                  <h3>
                    <p class="fw-bold">Saung Angklung Udjo</p>
                  </h3>
                </center>
                Jl. Padasuka, Pasirlayung, Kec. Cibeunying Kidul, Bandung Jawa Barat
              </p>
              <a href="Saung Angklung Udjo.php" class="btn btn-primary">Info Selengkapnya</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
            <img src="img/Gedung Sate/1.jpg" class="card-img-top" alt="Gedung Sate"/>
            <div class="card-body">
              <p class="card-text">
                <center>
                  <h3>
                    <p class="fw-bold">Gedung Sate</p>
                  </h3>
                </center>
                Jl. Diponegoro, Citarum, Kec. Bandung Wetan, Bandung Jawa Barat
              </p>
              <a href="Gedung Sate.php" class="btn btn-primary">Info Selengkapnya</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
            <img src="img/Museum Geologi Bandung.jpg" class="card-img-top" alt="Museum Geologi Bandung" />
            <div class="card-body">
              <p class="card-text">
                <center>
                  <h3>
                    <p class="fw-bold">Museum Geologi bandung</p>
                  </h3>
                </center>
                Jl. Diponegoro Cihaur Geulis, Kec. Cibeunying Kaler, Bandung Jawa Barat
              </p>
              <a href="Museum Geologi Bandung.php" class="btn btn-primary">Info Selengkapnya</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
            <img src="img/Masjid Raya Bandung.jpg" class="card-img-top" alt="Masjid Raya Bandung" />
            <div class="card-body">
              <p class="card-text">
                <center>
                  <h3>
                    <p class="fw-bold">Masjid Raya Bandung</p>
                  </h3>
                </center>
                Jl. asia Afrika (Alun-Alun), Bandung Jawa Barat
              </p>
              <a href="Masjid Raya Bandung.php" class="btn btn-primary">Info Selengkapnya</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
            <img src="img/Tangkuban Perahu.jpg" class="card-img-top" alt="Tangkuban Perahu" />
            <div class="card-body">
              <p class="card-text">
                <center>
                  <h3>
                    <p class="fw-bold">Tangkuban Perahu</p>
                  </h3>
                </center>
                Cikahuripan, Kec. Lembang, Bandung Jawa Barat
              </p>
              <a href="Tangkuban Perahu.php" class="btn btn-primary">Info Selengkapnya</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="400">
            <img src="img/Ciwidey/home.jpg" class="card-img-top" alt="Ranca Upas" />
            <div class="card-body">
            <p class="card-text">
                <center>
                  <h3>
                    <p class="fw-bold">Ranca Upas</p>
                  </h3>
                </center>
                Jl. Raya Ciwidey - Patengan, Kec. Rancabali, Bandung Jawa Barat
              </p>
              <a href="Ranca Upas.php" class="btn btn-primary">Info Selengkapnya</a>
              </p>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
            <img src="img/Kawah Putih/3.jpg" class="card-img-top" alt="Kawah Putih"/>
            <div class="card-body">
              <p class="card-text">
                <center>
                  <h3>
                    <p class="fw-bold">Kawah Putih</p>
                  </h3>
                </center>
                Sugihmukti, Kec. Pasirjambu, Bandung Jawa Barat
              </p>
              <a href="Kawah Putih.php" class="btn btn-primary">Info Selengkapnya</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- AKhir Destinasi Wisata -->
  <!-- footer -->
  <footer>
  <div class="card text-center bg-dark">
  <div class="card-body">
    <p class="card-text text-white">Copyright &copy; 2022 - Muhammad Syahnan, All Rights Reserved.</p>
  </div>
  </footer>
  <!-- Akhir footer -->
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
</body>

</html>