<?php

session_start();

include "config.php";

$username=$_POST['username'];
$password=md5($_POST['password']);

$data = $konek->query("SELECT * from users where username='$username' and password='$password'");
// $cek = mysqli_num_rows($data);

if($data->num_rows > 0){
    while($row = $data->fetch_assoc()){
        if($row['role'] == "admin"){
            $_SESSION['username']= $username;
            $_SESSION['role']="admin";
            header("location:adminhome.php");
        }elseif($row['role']== "user"){
            $_SESSION['username']=$username;
            $_SESSION['role']="user";
            header("location:userhome.php");
        }else{
            header("location:index.php?pesan=gagal");
        }
    }
}else {
    header("location:index.php?pesan=gagal");
}
?>
