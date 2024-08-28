<?php 
$se="localhost";
$user="root";
$pass="";
$data="ecommerce_app";
$conn=mysqli_connect($se,$user,$pass,$data);
if($conn)
{
    echo "Success";
}
else{
    echo "Failed";
}
?>