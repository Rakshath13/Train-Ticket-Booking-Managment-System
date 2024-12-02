<html>
    <head>
        <title>signup</title>
        <link rel="stylesheet" href="loginstyle2.css">
    </head>
    <body>
            <div class="login" >
                <form method="POST" action="">
                    <h1>SIGN IN</h1>
                    <label >username</label>
                    <input type="text" name ="username" required><br>
                    <label>password</label>
                    <input type="password" name ="password" required><br>
                    <label >email</label>
                    <input type="email" name ="email" required><br>
                    <input type="submit" value ="SIGN IN" name="loginbtn">
                    <div class="Anchor"><a href="login.php">Already a User?Login</a></div>
                </form>
            </div>
    </body>
</html>

<?php
if (isset($_POST['loginbtn']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$cn = mysqli_connect('localhost', 'root', '', 'train');
$qry = "INSERT INTO train (username, password , email) VALUES ('$username', '$password','$email')";
mysqli_query($cn, $qry);
echo "<script>window.location.href='login.php';</script>";
}
?>

