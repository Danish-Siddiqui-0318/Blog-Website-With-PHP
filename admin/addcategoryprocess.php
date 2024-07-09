<?php
require_once('db.php');
$category=$_POST['category'];
$query="INSERT INTO categories (category) VALUES ('".$category."')";
$result=mysqli_query($connection,$query);
if($result){
    header('location:addcategory.php?msg=SignIn Successfully');
}else{
    header('location:addcategory.php?msg=SignIn Failed');
}
?>