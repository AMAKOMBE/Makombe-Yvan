<?php

session_start();

$con = mysqli_connect('localhost','root','','education');

$username = $_POST['user'];
$password = $_POST['pass'];

$s = " select * from school where email = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['name'];
    $_SESSION['province'] = $row['province'];
    $_SESSION['district'] = $row['district'];
    if($username == 'reb@gmail.com'){
        header('location:admin_index.php');
    }else{
        header('location:web_index.php');
    }
} else {
    header('location:login_index.php');
}

?>