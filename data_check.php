<?php
session_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'lms_db';

$conn = mysqli_connect($hostname, $username, $password, $database);

if($conn==false){
    die("connection error");
}
if(isset($_POST['submit'])){
    $data_name=$_POST['fullname'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_message=$_POST['message'];

    $sql="INSERT INTO contact(fullname, email,phone, message ) VALUES('$data_name','$data_email','$data_phone','$data_message')";

    $result=mysqli_query($conn,$sql);

    if($result){
        //echo "Successfully Submitted";
        $_SESSION['message']="Successfully Submitted";
        header("location:index.php");
    }else{
        echo "submission failed";
    }
}
?>