<?php

session_start();
$result=session_destroy();
if($result){
    header("Location:login.php?msg=Logout Successfully");
}

?>