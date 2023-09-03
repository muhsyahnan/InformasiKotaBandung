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


    <!-- Navigasi   -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="fw-bold navbar-brand" href="index.php">Wisata Bandung</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="fw-bold nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="fw-bold nav-link" href="destinasi.php">Destinasi</a>
            </li>
            <li class="nav-item">
              <a class="fw-bold nav-link active" href="kontak.php">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="fw-bold nav-link" href="./Admin Aplikasi Wisata Bandung/login.php">Admin</a> 
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">
      <h1 class="text-white fw-bold">Bandung</h1>
      </div>
    </div>

    
    <!-- Isi Kontak -->
    
    <br>
    <br>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
   <div class="container badan">
       
      <div class="row">
        <div class="col peding-100">
          <h1>Kontak Saran</h1>
          <p>
            Silahkan tinggalkan pesan anda, pada kolom yang tersedia.
          </p>
        </div>
 
        <div class="col peding-30">
          <form method="post" action="tambah_saran.php">
             
            <div class="form-group">
              <label for="">Nama Anda:</label>
              <input type="text" class="form-control" name="Nama" placeholder="Masukkan Nama">
            </div>
 
            <div class="form-group">
              <label for="">E-mail Anda:</label>
              <input type="email" class="form-control" name="Email" placeholder="Masukkan Email">
            </div>
 
            <div class="form-group">
              <label for="">Pesan Anda:</label>
              <textarea name="Pesan" class="form-control" cols="30" rows="7"></textarea>
            </div>
 
            <input onclick="simpan()" class="btn btn-primary" type="submit" value="Kirim" name="kirim">
            

          </form>
        </div>
      </div>

      
 
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <br>
    <br>


   <!-- footer -->
  <footer>
  <div class="card text-center bg-dark">
  <div class="card-body">
    <p class="card-text text-white">Copyright &copy; 2022 - Muhammad Syahnan, All Rights Reserved.</p>
  </div>
  </footer>
  <!-- Akhir footer -->
	</footer>
      
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
    <script> 
    function simpan(){
      alert("Berhasil di Simpan");
   }
</script>
  </body>
</html>