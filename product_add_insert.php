<?php
include("conn.php");
$owner=$_POST['owner'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$description=$_POST['description'];
$category=$_POST['category'];
$name=$_POST['name'];
$image=$_POST["image_link"];
$mainCategory=$_POST["sub_category"];
$insert="INSERT INTO `product_admin`(`owner`, `price`,`stock`,`description`,`category`,`name`,`image_link`,`main_category`) VALUES ('$owner','$price','$stock','$description','$category','$name','$image','$mainCategory')";
if($owner !=null && $price !=null && $stock!=null && $description!=null && $category!=null && $name!=null && $image!=null && $mainCategory !=null){
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