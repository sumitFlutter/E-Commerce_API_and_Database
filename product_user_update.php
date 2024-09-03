<?php
include("conn.php");
$user=$_POST['user'];
$total_price=$_POST['total_price'];
$qua=$_POST['qua'];
$product=$_POST['product'];
$id=$_POST['id'];
$update="UPDATE `product_user` SET `user`='$user', `total_price`='$total_price',`qua`='$qua','product'='$product' WHERE `id` = '$id'";
if($id!=null && $user !=null && $total_price !=null && $product=null && $qua!=null ){
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