<?php
include("conn.php");
$sub=$_POST['sub'];
$name=$_POST['name'];
$insert="INSERT INTO `category`(`name`, `sub`) VALUES ('$name','$sub')";
if($sub!=null && $name!=null){
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