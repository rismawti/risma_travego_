<?php
include "config.php";
include "bot.php";

$sql=mysqli_query($konek, "SELECT * FROM admin_log WHERE userID='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>