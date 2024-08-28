<?php
include("conn.php");
$owner=$_POST['owner'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$description=$_POST['description'];
$category=$_POST['category'];
$name=$_POST['name'];
$insert="INSERT INTO `product_admin`(`owner`, `price`,`stock`,`description`,`category`,`name`) VALUES ('$owner','$price','$stock','$description','$category','$name')";
if($owner !=null && $price !=null && $stock!=null && $description!=null && $category!=null && $name!=null){
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