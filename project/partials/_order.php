<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
 
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include'_dbconnect.php';
    $user_name = $_POST['user'];
    $user_email=$_SESSION['useremail'];
    // $user_email = $_POST['email'];
    $address=$_POST['address'];
    $phone_num=$_POST['ph_num'];
    $card_num = $_POST['card_number'];
    $product_name = $_POST['product_name'];

    
    $sql="INSERT INTO `orders` (`user_email`, `user_name`, `user_address`, `user_phone`, `card_number`, `product_name`,  `date_of_purchase`) VALUES ('$user_email', '$user_name', '$address', '$phone_num', '$card_num', '$product_name', current_timestamp());";
    $result = mysqli_query($conn,$sql);

    
        header("location:/darkriders/project/index.php?ordered=true");
     }   
}
else{
    header("location:/darkriders/project/buy now.php?firstlogin=true");
}

?>