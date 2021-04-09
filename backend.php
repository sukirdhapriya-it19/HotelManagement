<?php
$Servername="localhost";
$username="root";
$password="";
$dbname="regform";

$conn=new mysqli($Servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
 
extract ($_POST);

$sql="INSERT INTO details(username,password)
VALUES ('$name','$pass')";

if($conn->query($sql)===TRUE){
  
    include 'success.html';
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close()
?>