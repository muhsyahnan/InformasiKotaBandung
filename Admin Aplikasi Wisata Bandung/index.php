<?php 
    include 'koneksi.php';
    session_start();


    $query = "SELECT * FROM kategori;";
    $sql = mysqli_query($conn, $query);
    $no = 0;

    
?>

<!DOCTYPE html>
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

    <!-- Data Tables -->
    <link rel="stylesheet" href="text.css" href="datatables/datatables.css">
    <script type="text/javascript" src="datatables/datatables.js"></script>
    <link rel="short icon" type="image/png" href="../favicomatic/favicon-32x32.png" sizes="32x32" />

    <title>Halaman Admin</title>
</head>

<script type="text/javascript">
        $(document).ready(function(){
          $('#dt').DataTable();
      });
</script>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Kelola</a>
        </li>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-primary btn-sm"><a href="logout.php" style="color:white;text-decoration:none">Log Out</a></button>
  </div>
</nav>

      <!--Judul-->
     <div class="container">
        <h1 class="mt-4 text-center">Kelola Data Tempat Wisata</h1>
        <br>
        <br><br><br><a href="kelola.php" type="button" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>

        <?php 
            if(isset($_SESSION['eksekusi'])):
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">

        <?php 
            echo $_SESSION['eksekusi'];
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php 
            session_destroy();
            endif;
        ?>

        <div class="table-responsive">
            <table id="dt" class="table align-middle table-bordered table-hover stripe hover">
              <thead>
                <tr>
                 <th><center>No.</center></th>
                 <th><center>Tempat Wisata</center></th>
                 <th><center>Isi Kontence</center></th>
                 <th><center>Gambar</center></th>
                 <th><center>Video</center></th>
                 <th><center>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  while($result =mysqli_fetch_assoc($sql)){                
                ?>
                <tr>
                  <td><center>
                    <?php echo ++$no; ?>.
                  </center></td>
                  <td>
                    <?php echo $result['Tempat_wisata']; ?>
                </td>
                  <td>
                    <?php echo $result['Isi_konten']; ?>
                </td>
                  <td>
                      <img src="img/<?php echo $result['Gambar']; ?>" style="width: 150px;">
                  </td>
                  <td>
                      <video src="video/<?php echo $result['Video']; ?>" style="width: 150px;">
                  </td>
                  <td>
                    <a href="kelola.php?ubah= <?php echo $result['Id_no']; ?>" type="button" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <a href="proses.php?hapus=<?php echo $result['Id_no']; ?>" type="button" class="btn btn-danger btn-sm" onclick= "return confirm('apakah anda yakin ingin menghapus data tersebut?')">
                          <i class="fa fa-trash"></i>
                      </a>
                  </td>
                </tr>
                <?php 
                  }
                ?>
                </tbody>
                </table>
                </div>
     </div>
     <div class="mb-5"></div>
</body>
</html>