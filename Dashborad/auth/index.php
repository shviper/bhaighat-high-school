<?php
include '../../config/database.php';
if (isset($_COOKIE['isLogIn'])) {
    header("Location: ../index.php");
}
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        setcookie("isLogIn", "true", time() + (86400 * 30), "/"); // 86400 seconds = 1 day
        echo
        '<div class="alert alert-success" role="alert">
        Login Success . Redirecting in dashboard...</a>.
        </div>';
        header("Refresh: 2; URL=../index.php");

        // header("Location: ../index.html");
    } else {
        echo
        '<div class="alert alert-danger" role="alert">
        Login Fail ! Enter valid password or Email</a>.
        </div>';
    }
}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./style.css">

<head>
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <style>
        @import url(‘https://fonts.googleapis.com/css2?family=Poppins&display=swap’);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins, sans-serif;
        }

        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body>


    <div class="content">
        <img src="../../img/logo/bhaighatlogo1.png">
        <div class="text">Bhaighat High School</div>
        <form action="index.php" method="POST">
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="email" required name="email" placeholder="Email Id">

            </div>
            <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" name="password" placeholder="Password">
                <!-- <label>Password</label> -->
            </div>

            <button name="submit">Log in</button>

        </form>
    </div>

</body>

</html>