<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            background: #3e4144;
        }

        .form {
            margin: 50px auto;
            width: 300px;
            padding: 30px 25px;
            background: #67989A;
        }

        h1.login-title {
            color: #fff;
            margin: 0px auto 25px;
            font-size: 25px;
            font-weight: 300;
            text-align: center;
        }

        .login-input {
            font-size: 15px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 25px;
            height: 25px;
            width: calc(100% - 23px);
        }

        .login-input:focus {
            border-color: #6e8095;
            outline: none;
        }

        .login-button {
            color: #fff;
            background: #236467;
            border: 0;
            outline: 0;
            width: 100%;
            height: 40px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;

        }

        .link {
            color: #fff;
            font-size: 15px;
            text-align: center;
            margin-bottom: 0px;
        }

        .link a {
            color: #fff;
        }

        h3 {
            font-weight: normal;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query = "SELECT * FROM `yjusers` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: admin-panel.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
        ?>
        <form class="form" method="post" name="login">
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
            <input type="password" class="login-input" name="password" placeholder="Password" />
            <input type="submit" value="Login" name="submit" class="login-button" />

            <p class="link"><a href="../index.php">Back to Website</a></p>
        </form>
        <?php
    }
    ?>
</body>

</html>