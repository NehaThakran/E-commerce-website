<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1" />
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="./register.css">
    </head>
    <body>
    <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="Login.php">SignIn</a></li>
        </li>
        <li><a href="index.php">Home</a></li>
    </ul>
    <form method="POST" action="register.php" class="centered">
        <div>
            <h2 style="color: black">Create an account</h2>
            <table>
                <tr>
                    <td><h1>Username</h1></td>
                    <td><input type="text" name="username" required class="textInput"/></td>
                </tr>
                <tr>
                    <td><h1>Password</h1></td>
                    <td><input type="password" name="password" required class="textInput"/></td>
                </tr>
                <tr>
                    <td><h1>Confirm Password</h1></td>
                    <td><input type="password" name="cpassword" required class="textInput"/></td>
                </tr>
                <tr>
                    <td><h1>First Name</h1></td>
                    <td><input type="text" name="first_name" required class="textInput"/></td>
                </tr>
                <tr>
                    <td><h1>Last Name</h1></td>
                    <td><input type="text" name="last_name" required class="textInput"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="register_btn" Value="Register" class="btn"/></td>
                </tr>
            </table>
            <br>
            <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
        </div>
    </form>
    <?php
    $db=mysqli_connect("localhost","root","","fashionzilla");
    if($db === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['register_btn']))
    {
        $username=mysqli_real_escape_string($db,$_POST['username']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $cpassword=mysqli_real_escape_string($db,$_POST['cpassword']);
        $first_name=mysqli_real_escape_string($db,$_POST['first_name']);
        $last_name=mysqli_real_escape_string($db,$_POST['last_name']);

        if($password!=$cpassword)
        {
            echo "<h2>The passwords do not match</h2>";
        }
        else
        {
            $s = "Select * from users where username='$username'";
            $retval = mysqli_query($db,$s);
            if(! $retval)
            {
                printf("Error: %s\n", mysqli_error($db));
            }
            $row = mysqli_fetch_array($retval);
            if($row !== null && $row['username']==isset($username))
            {
                echo "<h2>Username exists!!</h2>";
            }
            else
            {
                $sql="INSERT INTO  users(username,password,first_name,last_name) VALUES ('$username','$password','$first_name','$last_name')";
                $res = mysqli_query($db,$sql);
                if (isset($res)){
                    echo "<h2>Registration Successful</h2>";
                    header ("Location: login.php?status=success");
                }

            }
        }
    }
    ?>
    </body>
</html>