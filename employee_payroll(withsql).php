<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payroll</title>
    <link rel="stylesheet" href="eps.css">
</head>
<body>

    <!-- 
    CTRL+K+C for turning code to comments
    CTRL+K+U for turning comments to code
    -->

    <?php

        // EMPLOYEE BASIC INFO
        // image variable
        $image = "";
        $employee_number = "";
        $department = "";
        $first_name = "";
        $middle_name = "";
        $last_name = "";
        $civil_status = "";
        $designation = "";
        $qualified_dependents_status = "";
        $paydate = "";
        $employee_status = "";

        //BASIC INCOME
        $basic_rate = "";
        $basic_hours = "";
        $basic_income = "";

        //HONORARIUM INCOME
        $honorarium_rate = "";
        $honorarium_hours = "";
        $honorarium_income = "";

        //OTHER INCOME
        $other_rate = "";
        $other_hours = "";
        $other_income = "";

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


        $conn = new mysqli('localhost','root','','employee');
        $sql = "SELECT * FROM employee";    
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();



        if(isset($_POST["calculate_gross_income"]))
        {
            //BASIC INCOME CALCULATION
            $basic_rate;
            $basic_hours;
            $basic_income = $basic_rate * $basic_hours;
            
            //HONORARIUM INCOME CALCULATION
            $honorarium_rate = $_POST["honorarium_rate"];
            $honorarium_hours = $_POST["honorarium_hours"];
            $honorarium_income = $honorarium_rate * $honorarium_hours;

            //OTHER INCOME CALCULATION
            $other_rate = $_POST["other_rate"];
            $other_hours = $_POST["other_hours"];

            $other_income = $other_rate * $other_hours;
        }
    ?>


    <div>
        <form action="" method="post">
            <div class="subform" id="employee_basic_info">

                <h2>EMPLOYEE BASIC INFO:</h2>

                <div>
                <form action="" method="post" enctype="multipart/form-data">
                        <!--Check this:
                        https://stackoverflow.com/questions/4422210/how-to-add-simple-image-upload-to-a-form    
                        -->
                        <input type="image" value="<?php echo ($image)?>"><br>
                        <input name="choose_file" type="submit" value="Choose File">
                    </form>
                </div>

                <label for="employee_number">Employee Number:</label>
                <input type="text" name="employee_number" value="<?php 
                $employee_number = (int)readline(" ");
                ?>"><br>
                <label for="department">Department:</label>
                <input type="text" value="<?php 
                if ($employee_number = $row["employee_number"]){
                    echo $row["department"];
                }         
                ;?>" readonly><br>
                <label for="first_name">First Name:</label>
                <input type="text" value="<?php 
                                if ($employee_number = $row["employee_number"]){
                                    echo $row["first_name"];
                                }   
                ?>" readonly><br>
                <label for="middle_name">Middle Name:</label>
                <input type="text" value="<?php 
                                if ($employee_number = $row["employee_number"]){
                                    echo $row["middle_name"];
                                }   
                ?>" readonly><br>
                <label for="last_name">Last Name:</label>
                <input type="text" value="<?php 
                                if ($employee_number = $row["employee_number"]){
                                    echo $row["last_name"];
                                } 
                ?>" readonly><br>
                <label for="civil_status">Civil Status:</label>
                <input type="text" value="<?php
                                if ($employee_number = $row["employee_number"]){
                                    echo $row["civil_status"];
                                }  
                ?>" readonly><br>
                <label for="designation">Designation:</label>
                <input type="text" value="<?php 
                                if ($employee_number = $row["employee_number"]){
                                    echo $row["designation"];
                                } 
                ?>" readonly><br>
                <label for="qualified_dependents_status">Qualified Dependents Status:</label>
                <input type="text" name="qualified_dependents_status" value="<?php echo ($qualified_dependents_status);?>"><br>
                <label for="paydate">Paydate:</label>
                <input type="text" value="<?php 
                                if ($employee_number = $row["employee_number"]){
                                    echo $row["paydate"];
                                } 
                ?>" readonly><br>
                <label for="employee_status">Employee Status:</label>
                <input type="text" value="<?php 
                                if ($employee_number = $row["employee_number"]){
                                    echo $row["employee_status"];
                                } 
                ?>" readonly><br>
            </div>

        </form>
    </div>

    <div>
        <form action="" method="post">

            <div class="subform" id="basic_income">
                <h2>BASIC INCOME</h2>
                <label for="basic_rate">Rate/Hour:</label>
                <input type="text" name="basic_rate" value="<?php 
                $basic_rate = (int)readline(" ");
                ?>"><br>
                <label for="basic_hours">No. of Hours/Cutoff:</label>
                <input type="text" name="basic_hours" value="<?php 
                $basic_hours = (int)readline(" ");
                ?>"><br>
                <label for="basic_income">Income/Cutoff:</label>
                <input type="text" value="<?php echo ($basic_income);?>" readonly><br>
            </div>

            <div class="subform" id="honorarium_income">
                <h2>HONORARIUM INCOME</h2>
                <label for="honorarium_rate">Rate/Hour:</label>
                <input type="text" name="honorarium_rate" value="<?php 
                $honorarium_rate = (int)readline(" ");
                ?>"><br>
                <label for="honorarium_hours">No. of Hours/Cutoff:</label>
                <input type="text" name="honorarium_hours" value="<?php 
                $honorarium_hours = (int)readline(" ");
                ?>"><br>
                <label for="honorarium_income">Income/Cutoff:</label>
                <input type="text" value="<?php echo ($honorarium_income);?>" readonly><br>
            </div>

            <div class="subform" id="other_income">
                <h2>OTHER INCOME</h2>
                <label for="other_rate">Rate/Hour:</label>
                <input type="text" name="other_rate" value="<?php 
                $other_rate = (int)readline(" ");
                ?>"><br>
                <label for="other_hours">No. of Hours/Cutoff:</label>
                <input type="text" name="other_hours" value="<?php 
                $other_hours= (int)readline(" ");
                ?>"><br>
                <label for="other_income">Income/Cutoff:</label>
                <input type="text" value="<?php echo ($other_income);?>" readonly><br>
            </div>

            <div class="subform" id="summary_income">
                <h2>SUMMARY INCOME</h2>
                <label for="other_rate">Gross Income:</label>
                <input type="text" value="<?php echo ($gross_income);?>" readonly><br>
                <label for="other_rate">Net Income:</label>
                <input type="text" value="<?php echo ($net_income);?>" readonly><br>
            </div>

            <div class="subform" id="regular_deductions">
                <h2>REGULAR DEDUCTIONS</h2>
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
                <h2>OTHER DEDUCTIONS</h2>
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
                <h2>DEDUCTION SUMMARY</h2>
                <label for="other_rate">Total Deductions:</label>
                <input type="text" value="<?php echo ($total_deductions);?>" readonly><br>
            </div>

            <!-- BUTTONS -->
            <input name="calculate_gross_income" type="submit" value="CALCULATE GROSS INCOME">
            <input name="calculate_net_income" type="submit" value="CALCULATE NET INCOME">
            <input name="new" type="submit" value="NEW">
            <input name="preview_payslip" type="submit" value="PREVIEW PAYSLIP">
            <input name="print_payslip" type="submit" value="PRINT PAYSLIP">
            <input name="cancel" type="submit" value="CANCEL">
            <input name="close" type="submit" value="CLOSE">

        </form>
    </div>
    
</body>
</html>
