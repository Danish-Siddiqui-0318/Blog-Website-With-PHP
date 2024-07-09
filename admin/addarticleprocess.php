<?php
require_once('db.php');
$article=$_POST['article'];
$category=$_POST['category'];
$title=$_POST['title'];
$from = $_FILES['picture']['tmp_name'];
$to = 'images/'.$_FILES['picture']['name'];
move_uploaded_file($from,$to);

$query="INSERT INTO articles (article,category,picture,title) VALUES ('".$article."','".$category."','".$to."','".$title."')";
$result=mysqli_query($connection,$query);
if($result){
    header('location:addarticle.php?msg=Article Added  Successfully');
}else{
    header('location:addarticle.php?msg=Article Is not Added');
}
?>