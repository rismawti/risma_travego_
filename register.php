<?php
include "config.php";

$password = md5('$_POST[password]');
$data = $konek->query("INSERT INTO users(userID, username, name, email, no_tlp, password, alamat, role)
VALUES('$_POST[userID]','$_POST[username]', '$_POST[name]','$_POST[email]', '$_POST[no_tlp]', md5('$_POST[password]'),  '$_POST[alamat]','user')");
if($data){
    header("location:index.php");
}else{
    header("location:induser.php?pesan=gagal");
}
?>