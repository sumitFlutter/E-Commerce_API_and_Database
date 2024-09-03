<?php
include('conn.php');
header('Content-type: application/json');

$id=$_POST['id'];

if ($id != null) {
   
    $query = "DELETE FROM `sub-category`  WHERE `id`='$id'";
    $get = mysqli_query($conn, $query);

    if ($get) {
        $msg = array('status' => "ok", 'message' => "success");
        echo json_encode($msg, JSON_PRETTY_PRINT);  
        http_response_code(200);
    } else {
        $msg = array('status' => "failed", 'message' => "failed");
        echo json_encode($msg, JSON_PRETTY_PRINT);  
        http_response_code(400);
    }
} else {
    $msg = array('status' => "failed", 'message' => "Invalid key");
    echo json_encode($msg, JSON_PRETTY_PRINT);  
    http_response_code(400);
}
?>