<?php
include "config.php";
if(isset($_POST["search"])){
    $sql = "SELECT dari, menuju, kelas_penerbangan, tanggal_pergi FROM ticket";
$result = mysqli_query($konek, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    "dari: " . $row["dari"]. " - menuju: " . $row["menuju"]. " " . $row["kelas_penerbangan"]. " " . $row["tanggal_pergi"]. "<br>";
  }
}else {
    header("location:nextpemesananuser1.php");
}
}else{
    header("location:userhome.php?=pesan-gagal");
}
?>