<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login_index.php');
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
                    <form action="register_user.php" method="post">
                        <div class="form-group">
                            <label><b>School Name:</b></label>
                            <input type="text" name="name" class="form-control" placeholder="school name" autocomplete="off" required><br>
                        </div>
                        <div class="form-group">
                            <label><b>Province:</b></label><br>
                            <select name="province">
                                <option value="East Province">East Province</option>
                                <option value="Kigali City">Kigali City</option>
                                <option value="North Province">North Province</option>
                                <option value="South Province">South Province</option>
                                <option value="West Province">West Province</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <br><label><b>District:</b></label><br>
                            <select name="district">
                                <option value="Bugesera District">Bugesera District</option>
                                <option value="Burera District">Burera District</option>
                                <option value="Gakenke District">Gakenke District</option>
                                <option value="Gasabo District">Gasabo District</option>
                                <option value="Gatsibo District">Gatsibo District</option>
                                <option value="Gicumbi District">Gicumbi District</option>
                                <option value="Gisagara District">Gisagara District</option>
                                <option value="Huye District">Huye District</option>
                                <option value="Kamonyi District">Kamonyi District</option>
                                <option value="Karongi District">Karongi District</option>
                                <option value="Kayonza District">Kayonza District</option>
                                <option value="Kicukiro District">Kicukiro District</option>
                                <option value="Kirehe District">Kirehe District</option>
                                <option value="Muhanga District">Muhanga District</option>
                                <option value="Musanze District">Musanze District</option>
                                <option value="Ngoma District">Ngoma District</option>
                                <option value="Ngororero District">Ngororero District</option>
                                <option value="Nyabihu District">Nyabihu District</option>
                                <option value="Nyagatare District">Nyagatare District</option>
                                <option value="Nyamagabe District">Nyamagabe District</option>
                                <option value="Nyamasheke District">Nyamasheke District</option>
                                <option value="Nyanza District">Nyanza District</option>
                                <option value="Nyarugenge District">Nyarugenge District</option>
                                <option value="Nyaruguru District">Nyaruguru District</option>
                                <option value="Rubavu District">Rubavu District</option>
                                <option value="Ruhango District">Ruhango District</option>
                                <option value="Rulindo District">Rulindo District</option>
                                <option value="Rusizi District">Rusizi District</option>
                                <option value="Rutsiro District">Rutsiro District</option>
                                <option value="Rwamagana District">Rwamagana District</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <br><label><b>Email:</b></label>
                            <input type="text" name="email" class="form-control" placeholder="name@example.com" autocomplete="off" required><br>
                        </div>
                        <div class="form-group">
                            <label><b>Contact:</b></label>
                            <input type="text" name="contact" class="form-control" placeholder="start with country code(+XXXXXXXX)" autocomplete="off" required><br>
                        </div>
                        <div class="form-group">
                            <label><b>Password:</b></label>
                            <input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="off" required><br>
                        </div>
                        <button type="submit" class="btn btn-outline-success" name="submit">Submit</button>
                        <a href="display_user.php" class="btn btn-outline-danger" role="button" aria-pressed="true">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>