<?php
include('conn.php');
header('Content-type:application/json');
$userId=$_GET["userId"];
$query="SELECT * FROM `product_admin` WHERE `user` = '$userId'";
$res=mysqli_query($conn,$query);
$arr=array();

while($data=mysqli_fetch_assoc($res))
{
    $arr[]=$data;
}
$json=json_encode($arr,JSON_PRETTY_PRINT);
 echo $json;
?>