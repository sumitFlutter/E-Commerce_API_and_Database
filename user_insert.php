<?php
include('conn.php');

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];


if($name != null && $email != null && $pass != null)
{
    
    $query="SELECT * FROM user WHERE email='$email'";
    $res=mysqli_query($conn,$query);

    if(mysqli_num_rows($res)<=0)
    {
        $pass=password_hash($pass,PASSWORD_DEFAULT);
        $query="INSERT INTO `user` (`email`,`pass`,`name`) VALUES ('$email','$pass','$name')";
        $get = mysqli_query($conn,$query);

        if($get)
        {
            $msg=array('status'=>"ok",'message'=>"success");
            echo json_encode($msg);
            http_response_code(200);
        }
    
        else
        {
            $msg=array('status'=>"failed",'message'=>"failed");
            echo json_encode($msg);
            http_response_code(400);
        }

    }
    else
    {
        $msg=array('status'=>"failed",'message'=>"Already User");
        echo json_encode($msg);
        http_response_code(400);

    }
}
else{
    $msg=array('status'=>"failed",'message'=>"Invalid key");
    echo json_encode($msg);
    http_response_code(400);
}

?>