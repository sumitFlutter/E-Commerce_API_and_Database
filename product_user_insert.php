<?php
include("conn.php");
$user=$_POST['user'];
$product=$_POST['product'];
$qua=$_POST['qua'];
$total_price=$_POST['total_price'];
$insert="INSERT INTO `product_user`(`user`, `product`,`qua`,`total_price`) VALUES ('$user','$product','$qua','$total_price')";
if($user !=null && $product !=null && $qua!=null && $total_price!=null){
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