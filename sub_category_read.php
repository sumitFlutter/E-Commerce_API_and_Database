<?php
include('conn.php');
header('Content-type:application/json');
$Id=$_GET["Id"];
$query="SELECT * FROM `sub-category` WHERE `id` = '$Id'";
$res=mysqli_query($conn,$query);
$arr=array();

while($data=mysqli_fetch_assoc($res))
{
    $arr[]=$data;
}
$json=json_encode($arr,JSON_PRETTY_PRINT);
 echo $json;
?>