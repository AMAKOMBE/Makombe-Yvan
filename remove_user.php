<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login_index.php');
}

$con = mysqli_connect('localhost', 'root', '', 'education');

if (isset($_GET['userRemove'])) {
    $id = $_GET['userRemove'];
    $sql1 = "select * from school where id=$id";
    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $name = $row1['name'];
    $sql = "delete from school where id=$id";
    $result = mysqli_query($con, $sql);
    $sql2 = "delete from student where c_school_name like '$name'";
    $result2 = mysqli_query($con, $sql1);
    if ($result) {
        if($result2){
            header('location:display_user.php');
        }else{
            die(mysqli_error($con));
        }
    } else {
        die(mysqli_error($con));
    }
}
