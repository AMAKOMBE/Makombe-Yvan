<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login_index.php');
}

$con = mysqli_connect('localhost', 'root', '', 'education');

if (isset($_POST['submit'])) {
    $s_fname = $_POST['fname'];
    $s_lname = $_POST['lname'];
    $s_dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $class_year = $_POST['classYear'];
    $disability = $_POST['disability'];
    $pr_school = $_POST['pr_school'];
    $p_name = $_POST['p_name'];
    $p_id = $_POST['p_id'];
    $p_number = $_POST['p_number'];
    $p_email = $_POST['p_email'];
    $p_occupation = $_POST['p_occupation'];
    $p_education = $_POST['p_education'];
    $p_address = $_POST['p_address'];
    $c_school = $_POST['c_school'];
    $c_province = $_POST['c_province'];
    $c_district = $_POST['c_district'];

    $sql = "insert into student (s_fname,s_lname,s_dob,gender,class_year,disability,pr_school_name,p_name,p_id,p_number,p_email,p_occupation,p_education_level,p_address,c_school_name,c_province,c_district)
    values('$s_fname','$s_lname','$s_dob','$gender','$class_year','$disability','$pr_school','$p_name','$p_id','$p_number','$p_email','$p_occupation','$p_education','$p_address','$c_school','$c_province','$c_district')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display_student.php');
    } else {
        die(mysqli_error($con));
    }
}
