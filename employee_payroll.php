<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payroll</title>
    <link rel="stylesheet" href="ep_style.css">
</head>
<body>

    <!--READ ME-->
    <!-- income/cutoff should be output only (uneditable) -->


    <?php
        //BASIC INCOME
        $basic_rate = "";
        $basic_hours = "";
        $basic_income = "";

        if(isset($_POST["B1"]))
        {
            $basic_rate = $_POST["basic_rate"];
            $basic_hours = $_POST["basic_hours"];

            $basic_income = $basic_rate * $basic_hours;
        }

        //HONORARIUM INCOME
        $honorarium_rate = "";
        $honorarium_hours = "";
        $honorarium_income = "";

        if(isset($_POST["B1"]))
        {
            $honorarium_rate = $_POST["honorarium_rate"];
            $honorarium_hours = $_POST["honorarium_hours"];

            $honorarium_income = $honorarium_rate * $honorarium_hours;
        }

        //other INCOME
        $other_rate = "";
        $other_hours = "";
        $other_income = "";

        if(isset($_POST["B1"]))
        {
            $other_rate = $_POST["other_rate"];
            $other_hours = $_POST["other_hours"];

            $other_income = $other_rate * $other_hours;
        }

        //CTRL+K+C for turning code to comments
        //CTRL+K+U for turning comments to code

        //forgot what function this serves

        // $('form').live('submit', function(){
        //     $.post($(this).attr('action'), $(this).serialize(), function(response){
        //           // do something here on success
        //     },'json');
        //     return false;
        //  });

    ?>

    <div>
        <form action="" method="post">
            <div class="subform" id="basic_income">
                <h2>Basic Income</h2>
                <label for="basic_rate">Rate/Hour:</label>
                <input type="text" name="basic_rate" value="<?php echo ($basic_rate);?>"><br>
                <label for="basic_hours">No. of Hours/Cutoff:</label>
                <input type="text" name="basic_hours" value="<?php echo ($basic_hours);?>"><br>
                <label for="basic_income">Income/Cutoff:</label>
                <input type="text" value="<?php echo ($basic_income);?>" readonly><br>
            </div>
            <div class="subform" id="honorarium_income">
                <h2>Honorarium Income</h2>
                <label for="honorarium_rate">Rate/Hour:</label>
                <input type="text" name="honorarium_rate" value="<?php echo ($honorarium_rate);?>"><br>
                <label for="honorarium_hours">No. of Hours/Cutoff:</label>
                <input type="text" name="honorarium_hours" value="<?php echo ($honorarium_hours);?>"><br>
                <label for="honorarium_income">Income/Cutoff:</label>
                <input type="text" value="<?php echo ($honorarium_income);?>" readonly><br>
            </div>
            <div class="subform" id="other_income">
                <h2>Other Income</h2>
                <label for="other_rate">Rate/Hour:</label>
                <input type="text" name="other_rate" value="<?php echo ($other_rate);?>"><br>
                <label for="other_hours">No. of Hours/Cutoff:</label>
                <input type="text" name="other_hours" value="<?php echo ($other_hours);?>"><br>
                <label for="other_income">Income/Cutoff:</label>
                <input type="text" value="<?php echo ($other_income);?>" readonly><br>
            </div>
            <input name="B1" type="submit" value="Calculate!">
        </form>
    </div>
    
</body>
</html>
