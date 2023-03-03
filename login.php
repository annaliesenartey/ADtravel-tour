<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="box">
        <form method="POST" action="loginProc.php">
            <h2>Sign in</h2>
            <div class="inputBox">
                <input type="text" required="required" name='username' placeholder="Username">
                <!-- <span>Username/Email</span> -->
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name='Password' placeholder="Password">
                <!-- <span>Passowrd</span> -->
                <i></i>
            </div>
            <div class="links">
                <a href="">Forgot Password?</a>
                <a href="signup.php">Signup</a>
            </div>
            <input type="submit" name="login" value="login">
        </form>
    </div>

</body>

</html>