<!--# Dark_Riders-woc_4.0-
This is an E-commerce Website(prototype).
To run this website on your system,there are few things that you have to do
1.Download and install XAMPP Server on your system.
2.Then create a database named as 'darkriders' using myphp admin.
3.After that import the file 'darkriders.sql' on your 'darkrider' data base.
4.Now according to your XAMPP setting you can modify the file '_dbconnect.php'in '\project\partials' file if with  default setting it is not working.-->
<!DOCTYPE html>
<html>
  <head>
    <style></style>
  </head>
  <body>
    <h1 style = "text-align:center;font-size:1.5vw;font-weight:bold;font-family:arail;">Dark_Riders-WOC_4.0_</h1>
    <h2 style = "text-align:center;font-size:1.5vw;font-weight:bold;font-family:arail;">Welcome To Our Project</h2>
    <h3>Pre-Requisites For Opening Our Website on Your Laptop</h3>
    <ul>
      <li>Donwload and Install XAAMP Server on Your Computer.</li>
      <a href = "https://www.apachefriends.org/download.html">Link For Download XAAMP</a>
      <li>Start the XAAMP Server.</li>
     <li>Note the port number of MySQL service running on XAAMP and go to _dbconnect.php file and type the port number there like this:"$servername = 'localhost:port number'"</li>
      <li>Now open your browser and type "localhost" in the URL Address bar.</li>
      <li>Click on phpMyAdmin.</li>
      <li>Create a database named darkriders and in it create a table named users.</li>
      <li>In users create the following columns: sno, user_email, user_pass, user_name, timestamp</li>
    </ul>
    
  </body>

