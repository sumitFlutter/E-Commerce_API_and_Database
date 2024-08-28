<?php
include("conn.php");
$user=$_POST['user'];
$product=$_POST['product'];
$rating=$_POST['rating'];
$description=$_POST['description'];
$id=$_POST['id'];
$update="UPDATE `review` SET `user`='$user',`rating`='$rating',`product`='$product',`description`='$description' WHERE `id` = '$id'";
if($id !=null && $user !=null && $product !=null && $rating!=null && $description!=null)
{
    $a=mysqli_query($conn,$update); 
    if($a)
    {
        $arr = array('status' => 'Sucess', 'status_code' =>200);
        print(json_encode($arr));
    }
    else
    {
        $arr = array('status' => 'All ready exist', 'status_code' =>400);
        print(json_encode($arr));
    }
}
else
{
    $arr = array('status' => 'All ready exist', 'status_code' =>400);
    print(json_encode($arr));
}

?>