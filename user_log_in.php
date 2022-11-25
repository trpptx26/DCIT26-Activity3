<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="epstyle.css">
</head>
<body>
    <?php

    $username = "";
    $password = "";

    ?>

    <div class="subform">
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo ($username);?>"><br>

            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php echo ($password);?>"><br>
            <input name="log_in" type="submit" value="Log In">

            <div class="flex_container_row">
                <p>Don't have an account?</p>
                <div>
                    <input name="sign_up" type="submit" value="Sign Up">
                    <!--can also be just a button with link-->
                </div>
            </div>
        </form>
    </div>
</body>
</html>
