<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering Application</title>
    <link rel="stylesheet" href="eps.css">
</head>
<body>
    <?php
        $name_of_item = "";
        $quantity = "";
        $price = "";
        $discount_amount = "";
        $discounted_amount = "";
        $total_quantity = "";
        $total_discount_given = "";
        $total_discounted_amount = "";
        $cash_given = "";
        $change = "";

        $discount_option = "";
    ?>

    <div>

        <!--Images of items goes here-->

    </div>

    <div>
        <form action="" method="post">
            <div class="subform" id="employee_basic_info">

                <h2>ORDER DETAILS:</h2>

                <label for="name_of_item">Name of Item:</label>
                <input type="text" name="name_of_item" value="<?php echo ($name_of_item);?>"><br>
                <label for="quantity">Quantity:</label>
                <input type="text" name="quantity" value="<?php echo ($quantity);?>"><br>
                <label for="price">Price:</label>
                <input type="text" name="price" value="<?php echo ($price);?>"><br>
                <label for="discount_amount">Discount Amount:</label>
                <input type="text" value="<?php echo ($discount_amount);?>" readonly><br>
                <label for="discounted_amount">Discounted Amount:</label>
                <input type="text" value="<?php echo ($discounted_amount);?>" readonly><br>
                <label for="total_quantity">Total Quantity:</label>
                <input type="text" value="<?php echo ($total_quantity);?>" readonly><br>
                <label for="total_discount_given">Total Discount Given:</label>
                <input type="text" value="<?php echo ($total_discount_given);?>" readonly><br>
                <label for="total_discounted_amount">Total Discounted Amount:</label>
                <input type="text" value="<?php echo ($total_discounted_amount);?>" readonly><br>
                <label for="cash_given">Cash Given:</label>
                <input type="text" name="cash_given" value="<?php echo ($cash_given);?>"><br>
                <label for="change">Change:</label>
                <input type="text" value="<?php echo ($change);?>" readonly><br>
            </div>

        </form>
    </div>

    <div>
        <form action="" method="post">
            <div class="subform" id="employee_basic_info">

                <h2>ORDER DISCOUNT OPTIONS:</h2>

                <input type="radio" id="senior_citizen" name="discount_option" value="<?php $discount_option = "senior_citizen";?>">
                <label for="senior_citizen">Senior Citizen</label><br>

                <input type="radio" id="with_discount_card" name="discount_option" value="<?php $discount_option = "with_discount_card";?>">
                <label for="with_discount_card">With Discount Card</label><br>

                <input type="radio" id="employee_discount" name="discount_option" value="<?php $discount_option = "employee_discount";?>">
                <label for="employee_discount">Employee Discount</label><br>

                <input type="radio" id="no_discount" name="discount_option" value="<?php $discount_option = "no_discount";?>">
                <label for="no_discount">No Discount</label><br>

            </div>
        </form>
    </div>

</body>
</html>
