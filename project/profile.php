<!DOCTYPE html>
<html lang="en">
    <?php
session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace Deals</title>
    <link rel = "stylesheet" href = "../css/bootstrap.css">
    <link rel = "stylesheet" href = "../css/font-awesome.css">
    <script src = "../js/jquery.js"></script>
    <script src = "../js/bootstrap.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <style>
    .queries{
            display:flex;
            justify-content: space-evenly;
        }
        </style>

<?php include'partials/_style2.php'; ?>
</head>
<body>
     <?php include'partials/_navbar1.php'; ?>
        <?php include'partials/_dbconnect.php';?>
        <?php include'partials/_navbar2.php'; ?>
   
    
    <?php 
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo'<br>';
        echo'<div class="container my-4">
        <div class="jumbotron" style="background-color:#bff542">
            <div class = "queries">
        <div class="contacts">
            <h4 class = "text-center" style = "font-weight: bold;">User Details</h4>
            <ul class = "names">';
         $uid=$_SESSION['useremail'];
        // echo var_dump($user_id);

        $sql= "SELECT * FROM `users` WHERE `user_email` LIKE '$uid'";
        // echo var_dump($sql);
        $result1=mysqli_query($conn,$sql);
        
        // echo var_dump($result1);

        
        //  loop will be implemented 
        
        while ($row=mysqli_fetch_assoc($result1)) {


        echo'
                <li>Name:'.$row['user_name'].'</li>
                <li>Email:'.$row['user_email'].'</li>
                <li>Account Created on:'.$row['timestamp'].'</li>
                
            </ul>
        </div>
    </div><br>
        </div>';
        }
        echo'<h1 class="text-center">ORDER DETAILS</h1>';
        echo'<br>';
      echo'  
      <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">card number</th>
      <th scope="col">Product name</th>
      <th scope="col">Time of purchase</th>
    </tr>
  </thead>';
        $email=$_SESSION['useremail'];
        $sql="SELECT * FROM `orders` WHERE `user_email` = '$email'";
        $result=mysqli_query($conn,$sql);
        // echo var_dump($sql);
        // echo var_dump($result);

        
        //  loop will be implemented 
        $slrf=0;
        while ($row=mysqli_fetch_assoc($result)) {
            // echo $row['user_email'];
            //  echo $row['user_name'];
             $slrf=$slrf+1;
       echo" <tbody>

    <tr>
      <th scope='row'>".$slrf."</th>
      <td>".$row['user_name']."</td>
      <td>".$row['user_address']."</td>
       <td>".$row['user_phone']."</td>
       <td>".$row['card_number']."</td>
       <td>".$row['product_name']."</td>
       <td>".$row['date_of_purchase']."</td>
       
      
    </tr>";

           
        }
    //   echo'<div class = "_footer">
    //         <h4 class = "text-center" style = "color:white;">Copyrighted By &copy; Ace Deals</h4>
    //     </div>';
       
    }  
        ?>

         
        </body>
</html>