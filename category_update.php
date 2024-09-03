<?php
include("conn.php");
$name=$_POST['name'];
$sub=$_POST['sub'];
$id=$_POST['id'];
$update="UPDATE `category` SET `name`='$name', `sub`='$sub' WHERE `id` = '$id'";
if($id!=null && $sub !=null && $name !=null){
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