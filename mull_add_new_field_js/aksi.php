<?php
include "bot.php";
$konek=mysqli_connect("localhost", "root", "", "uhuy");
 if (isset($_POST['simpan'])) {
  //buat folder bernama gambar
  $tempdir = "gambar/"; 
        if (!file_exists($tempdir))
        mkdir($tempdir,0755); 
        //gambar akan di simpan di folder gambar
        $target_path = $tempdir . basename($_FILES['filegambar']['name']);

        //nama gambar
        $nama_file=$_FILES['filegambar']['name'];
        //ukuran gambar
        $ukuran_gambar = $_FILES['filegambar']['size']; 

        $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
        //lebar gambar
        $width = $fileinfo[0];
        //tinggi gambar
        $height = $fileinfo[1]; 
        if($ukuran_gambar > 81920){ 
            echo 'Ukuran gambar melebihi 80kb';
        }else if ($width > "480" || $height > "640") {
             echo 'Ukuran gambar harus 480x640';
        }else{
            if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                
                $sql=$konek->query("INSERT INTO upload(nama_file) VALUES('".$_POST['nama_file']."', '".$nama_file."')");
                echo 'Simpan data berhasil';
            } else {
                echo 'Simpan data gagal';
            }
        } 
 }
?>
<br>
 <table border="1">
  <thead>
   <tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Gambar</th>
   </tr>
  </thead>
  <tbody>
   <?php
    $no=1;
    $sql=$konek->query("SELECT * FROM upload order by id_file desc");
    while ($data=mysqli_fetch_array($sql)) {
   ?>
    <tr>
     <td><?=$no++?></td>
     <td><img src="gambar/<?=$data['Gambar']?>" width="100"></td>
    </tr>
   <?php
    }
   ?>
  </tbody>
 </table>
