<?php
include "config.php";

if(isset($_POST['search'])){
    $dari = $_POST['dari'];
    $menuju = $_POST['menuju'];
    $tanggal_pergi = $_POST['tanggal_pergi'];
    $tanggal_pulang = $_POST['tanggal_pulang'];
    $kelas_penerbangan = $_POST['kelas_penerbangan'];
    $passenger = $_POST['passenger'];
    $data = $konek->query("INSERT INTO pemesanan(dari, menuju, tanggal_pergi, tanggal_pulang, kelas_penerbangan, passenger) 
    VALUES('$_POST[dari]', '$_POST[menuju]','$_POST[tanggal_pergi]','$_POST[tanggal_pulang]','$_POST[kelas_penerbangan]', '$_POST[passenger]')");
    if($data){
        header('location:nextpemesananuser1.php');
    }else{
        header('location:userhome.php?pesan=gagal');
    }
    
}
?>