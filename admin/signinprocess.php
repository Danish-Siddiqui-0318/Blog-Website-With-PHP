<?php
require_once('db.php');
$email=$_POST['email'];
$password=$_POST['password'];
$user=$_POST['user'];

$query="INSERT INTO users (email,password,user) VALUES ('".$email."','".$password."','".$user."')";
$result=mysqli_query($connection,$query);
if($result){
    header('location:login.php?msg=SignIn Successfully');
}else{
    header('location:signin.php?msg=SignIn Failed');
}
?>