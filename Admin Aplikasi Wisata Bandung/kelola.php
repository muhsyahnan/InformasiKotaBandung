<!DOCTYPE html>

<?php 
    include 'koneksi.php';
    
      $Id_no = '';
      $Tempat_wisata = '';
      $Isi_konten = '';

    if(isset($_GET['ubah'])){
      $Id_no = $_GET['ubah'];
      
      $query = "SELECT * FROM kategori WHERE Id_no = '$Id_no';";
      $sql = mysqli_query($conn, $query);

      $result = mysqli_fetch_assoc($sql);

      $Tempat_wisata = $result['Tempat_wisata'];
      $Isi_konten = $result['Isi_konten'];
      

      // var_dump($result);

      // die();
    } 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstraps-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>Halaman Admin</title>
    <link rel="short icon" type="image/png" href="../favicomatic/favicon-32x32.png" sizes="32x32" />
   
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <b>Kelola Data</b>
          </a>
        </div>
      </nav>
      <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $Id_no; ?>" name="Id_no";>
          <div class="mb-3 row">
            <label for="Tempat_wisata" class="col-sm-2 col-form-label">
                Tempat Wisata
            </label>
            <div class="col-sm-10">
              <input required type="text" name="tempat_wisata" class="form-control" id="Tempat_wisata" placeholder="Tempat Wisata" value="<?php echo $Tempat_wisata; ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="Isi_konten" class="col-sm-2 col-form-label">
                Isi Konten
            </label>
            <div class="col-sm-10">
            <textarea required class="form-control" name="isi_konten" id="Isi_konten" rows="3" placeholder="ex: Deskripsikan Tempat Wisata tersebut" ><?php echo $Isi_konten; ?></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="Gambar" class="col-sm-2 col-form-label">
                Gambar
            </label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> class="form-control" type="file" name="gambar" id="Gambar" accept="image/">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="Video" class="col-sm-2 col-form-label">
                Video
            </label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> class="form-control" type="file" name="video" id="Video">
            </div>
          </div>

            <div class="mb-3 row mt-4">
              <div class="col">
                <?php 
                  if(isset($_GET['ubah'])){
                ?>
                  <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                      <i class="fa fa-floppy-o" aria-hidden="true"></i>
                      Simpan Perubahan
                  </button>
                <?php 
                  } else {
                ?>
                  <button type="submit" name="aksi" value="add" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Tambah Data
                    </button>
                <?php 
                  } 
                ?>
                <a href="index.php" type="button" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                      Batal
                </a>
              </div>
          </div>
        </form>
      </div>
</body>
</html>