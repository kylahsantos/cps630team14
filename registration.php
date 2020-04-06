<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);

        $fullname    = stripslashes($_REQUEST['fullname']);
        $fullname    = mysqli_real_escape_string($con, $fullname);

        $address   = stripslashes($_REQUEST['address']);
        $address  = mysqli_real_escape_string($con, $address);

        $telno   = stripslashes($_REQUEST['telno']);
        $telno    = mysqli_real_escape_string($con, $telno);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);


        $query    = "INSERT into `users` (username, fullname, address, telno, email, password)
                     VALUES ('$username', '$fullname', '$address', '$telno', '$email', '$password)";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="fullname" placeholder="Full Name" required />
        <input type="text" class="login-input" name="address" placeholder="Address" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress" required />
        <input type="text" class="login-input" name="telno" placeholder="Telephone Number" required />
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>
