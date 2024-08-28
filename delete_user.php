<?php
include('conn.php');

$email=$_POST['email'];
$pass=$_POST['pass'];

if($email != null && $pass!= null)
{
    
    $query="SELECT * FROM user WHERE email='$email'";
    $res=mysqli_query($conn,$query);
    

    if(mysqli_num_rows($res)==1)
    {
        $data=mysqli_fetch_assoc($res);
        if(password_verify($pass,$data['pass']))
        {
            $query="DELETE FROM `user` WHERE `id`=$data[id]";
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