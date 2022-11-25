<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="eps.css">
</head>
<body>
    <?php

    $email = "";
    $first_name = "";
    $last_name = "";
    $birthday = "";
    $username = "";
    $password = "";
    $confirm_password = "";
    $not_a_robot = "";

    ?>

    <div class="subform">
        <form action="" method="post">

            <label for="email">E-mail:</label>
            <input type="text" name="email" value="<?php echo ($email);?>"><br>

            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" value="<?php echo ($first_name);?>"><br>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" value="<?php echo ($last_name);?>"><br>

            <label for="birthday">Birthday:</label>
            <input type="date" name="birthday" value="<?php echo ($birthday);?>"><br>

            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo ($username);?>"><br>

            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php echo ($password);?>"><br>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" value="<?php echo ($confirm_password);?>"><br>

            <br>

            <input type="checkbox" name="not_a_robot" value="<?php echo ($not_a_robot);?>">
            <label for="not_a_robot">I am not a robot.</label><br>

            <input name="sign_up" type="submit" value="Sign Up">

            <div>
                <label for="log_in">Already have an account?</label>
                <input name="log_in" type="submit" value="Log In">
                    <!--can also be just a button with link-->
            </div>
        </form>
    </div>
</body>
</html>
