<?php
include("conn.php");
$sub_name=$_POST['sub-name'];
$id=$_POST['id'];
$update="UPDATE `sub-category` SET `name`='$name', `sub`='$sub' WHERE `id` = '$id'";
if($id!=null && $sub_name !=null){
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