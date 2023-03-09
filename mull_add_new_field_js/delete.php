<?php
$konek=mysqli_connect("localhost", "root", "", "travego_");

$id= $_GET["id"];
$delete = $konek->query("DELETE FROM pemesanan where id='$id'");
if($delete){
    
}
?>