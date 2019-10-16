<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="css/login css.css">
<style>
body{
    margin: 0;
    padding: 0;
    background: url(images/bakground.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
#l1
{
    color: red;
}
</style>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="loginbox">
    <img src="images/avatar.png" class="avatar">
        <h1 id="l1">Login Admin</h1>
        <form method="POST" action="alogin.php">
            <p>Username</p>
            <input type="text" name="gmail" placeholder="Enter Username" required="required">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password" required="required">
            <input type="submit" name="" value="Login">
            <a href="#">Forgot your password?</a><br>
            <a href="admin_registration.php">Don't have an account?</a>
        </form>
        
    </div>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>
</body>
</head>
</html>