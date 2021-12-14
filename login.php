<html>
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="./login.css">
        <?php
            $con = mysqli_connect("localhost","root","","fashionzilla");
            if (isset($_POST['log'])) {
                $username = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                if ($username != "" && $password != "") {
                    $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                    $count = mysqli_num_rows($result);
                    if ($count == 1){
                        echo "<h1>Login Successful! Welcome " .$row["username"];
                        echo "</h1>";
                        header("location: index.php");
                    }
                    else{
                        echo "<h1 style='color: red'>Incorrect username or password!!</h1>";
                    }
                }
            }
        ?>
    </head>
    <body>
        <form class="" action="login.php" method="post">
            <div class="container">
                <label for="">Sign In</label>
                <input type="text" name="email" placeholder="username" value="">
                <input type="password" name="password" placeholder="Password" value="">
                <a href="#">Forgot Password?</a>
                <button type="submit" class="btn" name="log">Login</button>
                <br><br>
                <div> Don't have an account? <a href="register.php" style="margin-left: auto; font-size: 16px">Register Here</a></div>
            </div>
        </form>
    </body>
</html>