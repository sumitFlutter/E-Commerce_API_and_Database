<?php
include('conn.php');

$new_name=$_POST['new_name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$new_email=$_POST["new_email"];
$new_pass=$_POST["new_pass"];

if($new_name != null && $email != null && $pass!= null && $new_pass != null && $new_email!=null)
{
    
    $query="SELECT * FROM user WHERE email='$email'";
    $res=mysqli_query($conn,$query);
    

    if(mysqli_num_rows($res)==1)
    {
        $data=mysqli_fetch_assoc($res);
        if(password_verify($pass,$data['pass']))
        {
        $pass=password_hash($new_pass,PASSWORD_DEFAULT);
        $query="UPDATE `user` SET `email`='$new_email',`pass`='$pass',`name`='$new_name' WHERE `id`=$data[id]";
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