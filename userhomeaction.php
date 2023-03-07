<?php
include "config.php";
if(isset($_POST["search"])){
    $type_pasenger = $_POST["type_pasenger"];
    $sql = "SELECT * FROM ticket WHERE type_pasenger='$type_pasenger'";
    $result = mysqli_query($konek, $sql);
    header("location:nextpemesananuser1.php");

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          
        }
    }
  }else{
      header("location:userhome.php?=pesan-gagal");
}
?>