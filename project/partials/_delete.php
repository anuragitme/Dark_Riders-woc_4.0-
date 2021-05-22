<?php
session_start();
include'_dbconnect.php';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            $id=$_SESSION['useremail'];
         $sql1="DELETE FROM `orders` WHERE `orders`.`user_email`='$id'" ;
         $result=mysqli_query($conn,$sql1);
         $sql2="DELETE FROM `users` WHERE `users`.`user_email`='$id'" ;
         $result=mysqli_query($conn,$sql2);
         session_destroy();
         header("location:/darkriders/project/index.php?deleted=true");
}



?>