<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login_index.php');
}

$con = mysqli_connect('localhost', 'root', '', 'education');
$school = $_SESSION['username'];
$id = $_GET['userUpdate'];
$sql = "select * from school where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = htmlspecialchars($row['name']);
$province = htmlspecialchars($row['province']);
$district = htmlspecialchars($row['district']);
$email = htmlspecialchars($row['email']);
$contact = htmlspecialchars($row['contact']);
$password = htmlspecialchars($row['password']);

if (isset($_POST['submit'])) {
    $id = $_GET['userUpdate'];
    $name = $_POST['name'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $pass = $_POST['pass'];

    $sql = "update school set id=$id,name='$name',province='$province'
    ,district='$district',email='$email',contact='$contact',password='$pass' where id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display_user.php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="signin.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>PSGAS</title>
</head>

<body style="background-image: url(pencil.jpg); background-size: cover;">
    <div class="container">
        <div class="registerUser-box">
            <div class="row my-5" style="margin:150px;">
                <div class="col-sm-12" style="background-color: white; height: 650px;padding: 3rem 1.3rem; position:relative; width: 100%;">
                    <form method="post">
                        <div class="form-group">
                            <label><b>School Name:</b></label>
                            <input type="text" name="name" class="form-control" placeholder="school name" autocomplete="off" value="<?= $name ?>" required readonly><br>
                        </div>
                        <div class="form-group">
                            <label><b>Province:</b></label><br>
                            <input type="text" name="province" class="form-control" placeholder="province" autocomplete="off" value="<?= $province ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <br><label><b>District:</b></label><br>
                            <input type="text" name="district" class="form-control" placeholder="district" autocomplete="off" value="<?= $district ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <br><label><b>Email:</b></label>
                            <input type="text" name="email" class="form-control" placeholder="name@example.com" autocomplete="off" value="<?= $email ?>" required><br>
                        </div>
                        <div class="form-group">
                            <label><b>Contact:</b></label>
                            <input type="text" name="contact" class="form-control" placeholder="start with country code(+XXXXXXXX)" autocomplete="off" value="<?= $contact ?>" required><br>
                        </div>
                        <div class="form-group">
                            <label><b>Password:</b></label>
                            <input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="off" value="<?= $password ?>" required><br>
                        </div>
                        <button type="submit" class="btn btn-outline-success" name="submit">Update</button>
                        <a href="display_user.php" class="btn btn-outline-danger" role="button" aria-pressed="true">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>