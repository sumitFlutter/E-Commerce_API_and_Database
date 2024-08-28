<?php
include("conn.php");
$user=$_POST['user'];
$product=$_POST['product'];
$rating=$_POST['rating'];
$description=$_POST['description'];
$insert="INSERT INTO `review`(`user`, `product`,`rating`,`description`) VALUES ('$user','$product','$rating','$description')";
if($user !=null && $product !=null && $rating!=null && $description!=null){
$a=mysqli_query($conn,$insert); 
if($a)
{
    $arr = array('status' => "Sucess", 'status_code' =>200);
    print(json_encode($arr));
}
else{
    $arr = array('status' => "All ready exist", 'status_code' =>400);
    print(json_encode($arr));
}}
else{
    $arr = array('status' => "All ready exist", 'status_code' =>400);
    print(json_encode($arr));
}
?>