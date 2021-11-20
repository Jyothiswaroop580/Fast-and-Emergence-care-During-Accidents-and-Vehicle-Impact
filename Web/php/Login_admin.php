<?php
    $host='localhost';
    $username='root';
    $password='';
    $db='bus_ticket_booking';
    $connect=mysqli_connect($host,$username,$password,$db,"3308");
    $respose=0;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email_id=$_POST['email_js'];
        $password=$_POST['password_js'];
        $query="select * from admin_login where email='$email_id'";
        $exist= $connect -> query($query);
        if($exist->num_rows>0){
            $query="select * from admin_login where email='$email_id' && password='$password'";
            $password_wrong=$connect -> query($query);
            if($password_wrong->num_rows<=0){
                $respose=2;//wrong password
            }
            else{
                $respose=3;//correct password
            }
        }
        else{
            $respose=1;//email does not exist
        }
    }
    echo json_encode($respose);
?>