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
$id=$_POST['id'];
$update="UPDATE `product_admin` SET `owner`='$owner', `price`='$price',`stock`='$stock',`description`='$description',`category`='$category',`name`='$name' , `main_category`='$mainCategory' , `image_link` = '$image' WHERE `id` = '$id'";
if($id!=null && $owner !=null && $price !=null && $stock!=null && $description!=null && $category!=null && $name!=null && $mainCategory!=null && $image!=null){
$a=mysqli_query($conn,$update); 
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