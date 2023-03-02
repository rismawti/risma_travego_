<?php 
 
 if(isset($_POST['forgotpass'])){
    $userID=$_POST['userID'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "UPDATE admin_log SET userID='$userID', username='$username', email='$email', password='$password' WHERE userID='$userID'";
    $query_run=mysqli_query($query);

    if($query_run){
        $_SESSION['status']="data succesfully updated";
        header('location:userhome.php');
    }else{
        $_SESSION['status']='data not updated';
        header('location:userhome.php');
    }
 }
?>