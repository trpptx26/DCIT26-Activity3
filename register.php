<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <?php
        $newusername = "";
        $password = "";
        $confirm_password = "";
        $name = "";
        $address = "";
        $contact_number = "";
        
        ?>
        <div>
            <form action="" method="post">
                <div>
                <label for="username">Username :</label>
                <input type="text" name="username" value="<?php $newusername = readline();?>" required><br>
                <label for="password">Password :</label>
                <input type="password" name="password" value="<?php $newpassword = readline();?>" required><br>
                <label for="confirm_password">Confirm Password :</label>
                <input type="password" name="confirm_password" value="<?php $confirm_password = readline();?>" required><br>
                <label for="name">Name :</label>
                <input type="text" name="name" value="<?php $name = readline();?>" required><br>
                <label for="address">Address :</label>
                <input type="text" name="address" value="<?php $address = readline();?>" required><br>
                <label for="contact_number">Contact Number :</label>
                <input type="text" name="contact_number" value="<?php $contact_number = readline();?>" required><br>
                </div>

                            <!-- BUTTONS -->
            <input name="confirm" type="submit" value="Confirm">
            <input name="back" type="submit" value="Back">
            </form>
        </div>
    </body>
</html>
