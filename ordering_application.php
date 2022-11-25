<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering Application</title>
    <link rel="stylesheet" href="epstyle.css">
    </head>
    <body>
        <?php
        $price = "";
        $quantity = "";
        $discount_amount = "";
        $discounted_amount = "";

        $total_bills = "";
        $total_quantity = "";
        $cash_given = "";
        $change = "";

        $pink_slides = "100";
        $black_sandals = "150";
        $bnw_sneakers = "200";
        $blue_slippers = "100";
        $pink_slippers = "100";
        $pretty_slippers ="120";
        $red_shirt = "150";
        $black_shirt = "150";
        $usb_charger = "100";

        $conn = new mysqli('localhost','root','','employee');
        $sql = "SELECT * FROM employee";    
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        
            if(isset($_POST["pink_slides"]) || isset($_POST["black_sandals"]) || isset($_POST["bnw_sneakers"]) || isset($_POST["blue_slippers"]) || isset($_POST["pink_slippers"]) 
            || isset($_POST["pretty_slippers"]) || isset($_POST["red_shirt"]) || isset($_POST["black_shirt"]) || isset($_POST["usb_charger"])){
                
                if(isset($_POST["pink_slides"])){
                    $price = $pink_slides;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
                
                if(isset($_POST["black_sandals"])){
                    $price = $black_sandals;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
        
                if(isset($_POST["bnw_sneakers"])){
                    $price = $bnw_sneakers;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
        
                if(isset($_POST["blue_slippers"])){
                    $price = $blue_slippers;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
        
                if(isset($_POST["pink_slippers"])){
                    $price = $pink_slippers;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
        
                if(isset($_POST["pretty_slippers"])){
                    $price = $pretty_slippers;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
        
                if(isset($_POST["red_shirt"])){
                    $price = $red_shirt;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
        
                if(isset($_POST["black_shirt"])){
                    $price = $black_shirt;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
        
                if(isset($_POST["usb_charger"])){
                    $price = $usb_charger;
                    $quantity = (int)$_POST["quantity"];
                    $discount_amount = (int)$_POST["discount_amount"];
                    $discounted_amount = $price - $discount_amount;
                    $quantity++;
                    $discounted_amount = $discounted_amount * $quantity;

                    $query = "insert into orderingapplication(discounted_amount,quantity) values ('$discounted_amount' , '$quantity')" ; 
                    $run = mysqli_query($conn,$query);
                }
            }

            if(isset($_POST["calculate"])){
            }

            if(isset($_POST["clear"])){

            }

            if(isset($_POST["print"])){

            }

            if(isset($_POST["exit"])){

            }

        ?>

        <form action="" method="post" >
            <div class="flex_container_row">
                <div>
                    <div class="title">
                        <img src="https://i.imgur.com/nd7JLkm.png" alt="***" width="400">
                    </div>
                    <div class="subform">

                        <h2>Price</h2>

                        <label for="price">Price:</label>
                        <input type="text" name="price" value="<?php echo ($price);?>"><br>
                        <label for="quantity">Quantity:</label>
                        <input type="text" name="quantity" value="<?php echo($quantity);?>" ><br>
                        <label for="discount_amount">Discount Amount:</label>
                        <input type="text" name="discount_amount" value="<?php echo($discount_amount);?>" ><br>
                        <label for="discounted_amount">Discounted Amount:</label>
                        <input type="text" name="discounted_amount" value="<?php echo($discounted_amount);?>"><br>
                    </div>
                    <div class="subform">
                        
                        <h2>Bills</h2>

                        <label for="total_bills">Total Bills:</label>
                        <input type="text" name="total_bills" value="<?php echo($total_bills);?>"><br>
                        <label for="total_quantity">Total Quantity:</label>
                        <input type="text" name="total_quantity" value="<?php echo($total_quantity);?>"><br>
                        <label for="cash_given">Cash Given:</label>
                        <input type="text" name="cash_given" value="<?php $cash_given = readline();?>"><br>
                        <label for="change">Change:</label>
                        <input type="text" name="change" value="<?php echo($change);?>"><br>
                    </div>
                </div>
                <div class="flex_container_column">
                    <div class="flex_container_row" id="store">
                        <!-- BUTTONS -->
                        <div class="item_column">
                            <img src="pink_slides.jpg"></img>
                            <input name="pink_slides" type="submit" value="PINK SLIDES"><br>
                            <img src="blue_slippers.jpg"></img>
                            <input name="blue_slippers" type="submit" value="BLUE SLIPPERS"><br>
                            <img src="red_shirt.jpg"></img>
                            <input name="red_shirt" type="submit" value="RED SHIRT"><br>
                        </div>
                        <div class="item_column">
                            <img src="black_sandals.jpg"></img>
                            <input name="black_sandals" type="submit" value="BLACK SANDALS"><br>
                            <img src="pink_slippers.jpg"></img>
                            <input name="pink_slippers" type="submit" value="PINK SLIPPERS"><br>
                            <img src="black_shirt.jpg"></img>
                            <input name="black_shirt" type="submit" value="BLACK SHIRT"><br>
                        </div>
                        <div class="item_column">
                            <img src="bnw_sneakers.jpg"></img>
                            <input name="bnw_sneakers" type="submit" value="BNW SNEAKERS"><br>
                            <img src="pretty_slippers.jpg"></img>
                            <input name="pretty_slippers" type="submit" value="PRETTY SLIPPERS"><br>
                            <img src="usb_charger.jpg"></img>
                            <input name="usb_charger" type="submit" value="USB CHARGER"><br>
                        </div>
                    </div>
                    <div class="flex_container_row" id="button_bar">
                        <!-- BUTTONS -->
                        <input name="calculate" type="submit" value="CALCULATE">
                        <input name="new" type="submit" value="NEW">
                        <input name="clear" type="submit" value="CLEAR">
                        <input name="print" type="submit" value="PRINT">
                        <input name="exit" type="submit" value="EXIT">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
