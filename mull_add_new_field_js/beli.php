<?php
session_start();
$id_ticket=$_GET["id"];

if(isset($_SESSION["pemesanan"][$id_ticket])){
    $_SESSION["pemesanan"][$id_ticket]+=1;
}else{
    $_SESSION["pemesanan"][$id_ticket] = 1;
}
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<script>alert('ticket telah dipesan');</script>";
echo "<script>location='det_pemesanan.php';</script>"
?>