<?php
$Servername="localhost";
$username="root";
$password="";
$dbname="hotelmanagement";

$conn=new mysqli($Servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}

extract ($_POST);


$sql="SELECT * FROM customerdetails where mailid='$loginuser' and password='$loginpass'";
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result); 
  
if($count == 1){  
  include 'reservation.html';
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
   echo $username1;

}     
?>   
       