<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="loginstyle2.css">
    </head>
    <body>
            <div class="login" >
                <form method="POST" action="">
                    <h1>LOG IN</h1>
                    <label >username</label>
                    <input type="text" name ="username" required >
                    <label>password</label>
                    <input type="password" name ="password" required>
                    <input type="submit" value ="login" name="loginbtn">
                   
                </form>
            </div>
    </body>
</html>
<?php
if (isset($_POST['loginbtn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cn = mysqli_connect('localhost', 'root', '', 'train');
    $qry ="select * from train where username='".$username."' and password='".$password."'";
    $rc=mysqli_query($cn,$qry);
    $r=mysqli_num_rows($rc);
    if($username=="Admin" && $password=="Admin"){
        echo "<script>window.location.href='Admin.php';</script>";    
    }
    else if($r!=0){
        echo "<script>window.location.href='index.php';</script>";
    }
    else{
    echo "<script>alert('Invalid username and password');</script>";
    echo "<script>window.location.href='index.php';</script>";
    }
}
?>