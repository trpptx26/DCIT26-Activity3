<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <?php
        $username = "";
        $password = "";
        ?>
        <div>
            <form action="" method="post">
                <div>
                <label for="username">Username :</label>
                <input type="text" name="username" value="<?php $username = readline();?>" required><br>
                <label for="password">Password :</label>
                <input type="password" name="password" value="<?php $password = readline();?>" required><br>
                </div>

                            <!-- BUTTONS -->
            <input name="Login" type="submit" value="Login">
            <input name="Register" type="submit" value="Register">
            </form>
        </div>
    </body>
</html>
