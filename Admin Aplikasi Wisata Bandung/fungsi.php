<?php
    include 'koneksi.php';

    function tambah_data($data, $files){
            $Tempat_wisata = $data['tempat_wisata'];
            $Isi_konten = $data['isi_konten'];

            $split = explode('.',  $files['gambar']['name']);        
            $ekstensi = $split[count($split)-1];

            $Gambar = $Tempat_wisata.'.'.$ekstensi;
            $Video = $files['video']['name'];

            $dir = "img/";
            $tmpFile = $_FILES['gambar']['tmp_name'];
            
            move_uploaded_file($tmpFile,  $dir.$Gambar);

            $dir = "video/";
            $tmpFile = $_FILES['video']['tmp_name'];
            
            move_uploaded_file($tmpFile,  $dir.$Video );
            
            $query = "INSERT INTO kategori VALUES('', '$Tempat_wisata', '$Isi_konten', '$Gambar', '$Video')";
            $sql = mysqli_query($GLOBALS['conn'], $query);

            return true;
    }

    function ubah_data($data, $files){
            $Id_no = $data['Id_no'];
            $Tempat_wisata = $data['tempat_wisata'];
            $Isi_konten = $data['isi_konten'];

            $queryShow = "SELECT * FROM kategori WHERE Id_no = '$Id_no';";
            $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow); 
            $result = mysqli_fetch_assoc($sqlShow);

            if($files['gambar']['name'] == ""){
                $Gambar = $result['Gambar'];
            } else {

                $split = explode('.',  $files['gambar']['name']);        
                $ekstensi = $split[count($split)-1];

                $Gambar = $result['Tempat_wisata'].'.'.$ekstensi;
                unlink("img/".$result['Gambar']);
                move_uploaded_file($files['gambar']['tmp_name'], 'img/'.$Gambar);
            }

            if($files['video']['name'] == ""){
                $Video = $result['Video'];
            } else {
                $Video = $files['video']['name'];
                unlink("video/".$result['Video']);
                move_uploaded_file($files['video']['tmp_name'], 'video/'.$files['video']['name']);
            }



            $query = "UPDATE kategori SET id_no='$Id_no', tempat_wisata='$Tempat_wisata', isi_konten='$Isi_konten', Gambar= '$Gambar', Video= '$Video' WHERE id_no='$Id_no';";
            $sql = mysqli_query($GLOBALS['conn'], $query);
            
            return true;
    }

    function hapus_data($data){
            $Id_no = $data['hapus'];

            $queryShow = "SELECT * FROM kategori WHERE Id_no = '$Id_no';";
            $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow); 
            $result = mysqli_fetch_assoc($sqlShow);

            // var_dump($result);

            unlink("img/".$result['Gambar']);
            unlink("video/".$result['Video']);

            $query = "DELETE FROM kategori WHERE Id_no = '$Id_no';";
            $sql = mysqli_query($GLOBALS['conn'], $query);
            
            return true;
    }

?>