<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="description" content="t00. Registration">
        <link rel="icon" href="./src/img/reg.png">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>

        <div id="login-box" class="left">
            <h1>Registration form</h1>
            <form action="index.php" method="post">
                <label>Login</label>
                <input id="login" type="text" name="login" placeholder="Username" required/>
                <label>Password</label>
                <input id="password" type="text" name="password" placeholder="Password" required/>
                <label>Confirm password</label>
                <input id="confirmed_password" type="text" name="confirmed_password" placeholder="Confirm password" required/>
                <label>Name</label>
                <input id="name" type="text" name="name" placeholder="Full name" required/>
                <label>Email Address</label>
                <input id="email" type="text" name="email" placeholder="E-mail" required/>
                <input type="submit" name="signup" value="Sign up" />
            </form>
        </div>

        <?php
            require_once("./connection/DatabaseConnection.php");
            require_once("./models/Model.php");
            require_once("./models/Database.php");

            if ($_POST != null) {
                if ($_POST["password"] == $_POST["confirmed_password"]) {
                    $usersDatabase = new Database();
                    $usersDatabase->save();
                    echo "<script src='checked.js'></script>";
                } else {
                    echo "<script src='alert.js'></script>";
                }
              }
        ?>
    </body>
</html>