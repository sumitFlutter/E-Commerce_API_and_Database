<?php
include("conn.php");
header('Content-type: application/json');
$search=$_GET["search"];
$table="product_admin";
$column="name";
$query ="SELECT * FROM $table WHERE $column LIKE '%$search%'";
$arr=array();
if($search !=null)
{
    $one=$mysqli_query($conn,$query);
    if(mysqli_num_rows($one)!=0)
    {
            while($data=mysqli_fetch_assoc($one))
            {
                $arr[]=$data;
            }
            $json=json_encode($arr,JSON_PRETTY_PRINT);
            echo $json;
    }
    else{
        $table="user";
        $two=$mysqli_query($conn,$query);
        if(mysqli_num_rows($two)!=0)
        {
                while($data=mysqli_fetch_assoc($two))
                {
                    $arr[]=$data;
                }
                $json=json_encode($arr,JSON_PRETTY_PRINT);
                echo $json;
        }
        else{
                $table="category";
            $three=$mysqli_query($conn,$query);
            if(mysqli_num_rows($three)!=0)
            {
                    while($data=mysqli_fetch_assoc($three))
                    {
                        $arr[]=$data;
                    }
                    $json=json_encode($arr,JSON_PRETTY_PRINT);
                    echo $json;
            }
            else{
                        $table="sub-category";
                $four=$mysqli_query($conn,$query);
                if(mysqli_num_rows($four)!=0)
                {
                        while($data=mysqli_fetch_assoc($four))
                        {
                            $arr[]=$data;
                        }
                        $json=json_encode($arr,JSON_PRETTY_PRINT);
                        echo $json;
                }
                else{
                    $json=json_encode($arr,JSON_PRETTY_PRINT);
                        echo $json;
                }
            }
        }
    }
}
else {
    $msg = array('status' => "failed", 'message' => "Invalid key");
    echo json_encode($msg, JSON_PRETTY_PRINT);  
    http_response_code(400);
}
?>
