<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include'_dbconnect.php';
    $user_name = $_POST['username'];
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // checking username already exists or not
    $existSql="SELECT * FROM `users` WHERE user_email ='$user_email'";
    $result = mysqli_query($conn,$existSql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
        $showError ="Email already in use";
        header("location:/darkriders/project/index.php?signupunsuccess1=true");
        
    }
    else{
        if($pass==$cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql="INSERT INTO `users` ( `user_name`,`user_email`, `user_pass`, `timestamp`) VALUES ( '$user_name','$user_email', '$hash', current_timestamp())";
            $result_=mysqli_query($conn,$sql);
            if($result_){
                $showAlert=true;
                header("location:/darkriders/project/index.php?signupsuccess=true");
            }
        }
        else{
            $showError="Passwords do not match";
            header("location:/darkriders/project/index.php?signupunsuccess2=true");
        }

    }
    //  header("location:/forum4/index.php?signupsuccess=false&error=$showError");
}


?>