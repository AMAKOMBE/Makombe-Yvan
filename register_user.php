<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login_index.php');
}

$con = mysqli_connect('localhost','root','','education');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $pass = $_POST['pass'];

    $sql="insert into school (name,province,district,email,contact,password)
    values('$name','$province','$district','$email','$contact','$pass')";

    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display_user.php');
    }else{
        die(mysqli_error($con));
    }
}
