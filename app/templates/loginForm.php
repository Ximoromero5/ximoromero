<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f32dfec8d8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../web/css/styles.css">
    <title>Login</title>
</head>

<body>
    <h3>Choose your gender</h3>
    <div class="gender">
        <div class="male">
            <img src="../../web/img/male.png">
            <h3>Male</h3>
        </div>
        <div class="female">
            <img src="../../web/img/female.png">
            <h3>Female</h3>
        </div>
    </div>
    <p>Please fill the form below to get started</p>
    <form action="" method="POST">
        <i class="far fa-envelope"></i><input type="text" placeholder="Email" name="email">
        <i class="fas fa-lock"></i><input type="password" placeholder="Password" name="password">
        <div class="bottom">
            <p>No account? <a href="#">Sign Up</a></p>
            <input type="submit" value="Login" name="Login">
        </div>
    </form>
</body>

</html>