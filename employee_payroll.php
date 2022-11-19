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

    <!-- 
    CTRL+K+C for turning code to comments
    CTRL+K+U for turning comments to code
    -->

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

        //OTHER INCOME
        $other_rate = "";
        $other_hours = "";
        $other_income = "";

        if(isset($_POST["B1"]))
        {
            $other_rate = $_POST["other_rate"];
            $other_hours = $_POST["other_hours"];

            $other_income = $other_rate * $other_hours;
        }

        //SUMMARY INCOME
        $gross_income = "";
        $net_income = "";

        //REGULAR DEDUCTIONS
        $sss_contribution = "";
        $philhealth_contribution = "";
        $pagibig_contribution = "";
        $income_tax_contribution = "";

        //OTHER DEDUCTIONS
        $sss_loan = "";
        $pagibig_loan = "";
        $faculty_savings_deposit = "";
        $faculty_savings_loan = "";
        $salary_loan = "";
        $other_loans = "";

        //DEDUCTION SUMMARY
        $total_deductions = "";

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

            <div class="subform" id="summary_income">
                <h2>Summary Income</h2>
                <label for="other_rate">Gross Income:</label>
                <input type="text" value="<?php echo ($gross_income);?>" readonly><br>
                <label for="other_rate">Net Income:</label>
                <input type="text" value="<?php echo ($net_income);?>" readonly><br>
            </div>

            <div class="subform" id="regular_deductions">
                <h2>Regular Deductions</h2>
                <label for="other_rate">SSS Contribution:</label>
                <input type="text" value="<?php echo ($sss_contribution);?>" readonly><br>
                <label for="other_rate">PhilHealth Contribution:</label>
                <input type="text" value="<?php echo ($philhealth_contribution);?>" readonly><br>
                <label for="other_rate">Pagibig Contribution:</label>
                <input type="text" value="<?php echo ($pagibig_contribution);?>" readonly><br>
                <label for="other_rate">Income Tax Contribution:</label>
                <input type="text" value="<?php echo ($income_tax_contribution);?>" readonly><br>
            </div>

            <div class="subform" id="other_deductions">
                <h2>Other Deductions</h2>
                <label for="other_rate">SSS Loan:</label>
                <input type="text" name="other_rate" value="<?php echo ($sss_loan);?>"><br>
                <label for="other_rate">Pagibig Loan:</label>
                <input type="text" name="other_rate" value="<?php echo ($pagibig_loan);?>"><br>
                <label for="other_rate">Faculty Savings Deposit:</label>
                <input type="text" name="other_rate" value="<?php echo ($faculty_savings_deposit);?>"><br>
                <label for="other_rate">Faculty Savings Loan:</label>
                <input type="text" name="other_rate" value="<?php echo ($faculty_savings_loan);?>"><br>
                <label for="other_rate">Salary Loan:</label>
                <input type="text" name="other_rate" value="<?php echo ($salary_loan);?>"><br>
                <label for="other_rate">Other Loans:</label>
                <input type="text" name="other_rate" value="<?php echo ($other_loans);?>"><br>
            </div>

            <div class="subform" id="deduction_summary">
                <h2>Deduction Summary</h2>
                <label for="other_rate">Total Deductions:</label>
                <input type="text" value="<?php echo ($total_deductions);?>" readonly><br>
            </div>

            <!-- BUTTONS -->
            <input name="B1" type="submit" value="CALCULATE GROSS INCOME">
            <input name="B2" type="submit" value="CALCULATE NET INCOME">
            <input name="B3" type="submit" value="NEW">
            <input name="B4" type="submit" value="PRINT PREVIEW PAYSLIP">
            <input name="B5" type="submit" value="PRINT PAYSLIP">
            <input name="B6" type="submit" value="CANCEL">
            <input name="B7" type="submit" value="CLOSE">

        </form>
    </div>
    
</body>
</html>
