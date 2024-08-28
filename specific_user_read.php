<?php
include('conn.php');
header('Content-type:application/json');


$email=$_POST['email'];
$pass=$_POST['pass'];

if($email != null && $pass != null)
{
    $query="SELECT * FROM user WHERE email='$email'";
    $res=mysqli_query($conn,$query);

    $data=mysqli_fetch_assoc($res);

    if(password_verify($pass,$data['pass']))
    {
           $msg=array('status'=>"ok","name"=>$data['name'],"email"=>$data['email'],"message"=>'success',"uid"=>$data['id']);
            echo json_encode($msg,JSON_PRETTY_PRINT);
            http_response_code(200);
    }
    else{
        $msg=array('status'=>"failed",'message'=>"Email pass wrong");
            echo json_encode($msg,JSON_PRETTY_PRINT);
            http_response_code(400);
    }
}
else
{
    $msg=array('status'=>"failed",'message'=>"failed");
    echo json_encode($msg,JSON_PRETTY_PRINT);
    http_response_code(400);
}
?>
