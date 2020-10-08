<!DOCTYPE html>
<!--
Karn Bhavsar
Student ID: 991578281
SYST10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Order</title>
        <link rel="stylesheet" href="CSS/style.css"/>
    </head>
    <body>
        <div class="grid-container-header">
            <div class="header">
                <img src="Images/logo-en.png">
                <h1>Your Starbucks's Order</h1>
            </div>            
        </div>
        <?php
            echo "<div class='grid-container'>";
            function order()
            {
                $size = $_POST["size"];
                $nocoffee = $_POST["no_coffee"];
                $cream = $_POST["no_cream"];
                $sugar = $_POST["no_sugar"];
                
                if ($size == "-1")
                {
                    echo "<p>Please Select a Size</p>";
                    echo "<br>";
                }
                else
                {
                    if ($cream < 0 || $sugar < 0)
                    {
                        error();
                    }
                    else
                    {
                        if ($size == "small")
                        {
                            for($x = 0; $x < $nocoffee; $x++)
                            {
                                echo "<img src='Images/cup.jpg' style='width:100px;height:100px;'>";
                            }
                        }
                        elseif ($size == "medium") 
                        {
                            for($x = 0; $x < $nocoffee; $x++)
                            {
                                echo "<img src='Images/cup.jpg' style='width:100px;height:150px;'>";
                            }
                        }
                        elseif ($size == "large")
                        {
                            for($x = 0; $x < $nocoffee; $x++)
                            {
                                echo "<img src='Images/cup.jpg' style='width:100px;height:200px;'>";
                            }
                        }
                        elseif ($size == "extra-large")
                        {
                            for($x = 0; $x < $nocoffee; $x++)
                            {
                                echo "<img src='Images/cup.jpg' style='width:100px;height:250px;'>";
                            }
                        }

                        if ($nocoffee < 0)
                        {
                            echo "<p>Please enter a Valid Number of Coffee</p>";
                            echo "<br>";
                        }
                        else
                        {
                            if($cream > 0)
                            {
                                echo "<img src='Images/plus.jpg' style='width:50px;height:50px;'>";
                            }

                            for($x = 0; $x < $cream; $x++)
                            {
                                echo "<img src='Images/cream.jpg' style='width:50px;height:50px;'>";
                            }

                            if($sugar > 0)
                            {
                                echo "<img src='Images/plus.jpg' style='width:50px;height:50px;'>";
                            }

                            for($x = 0; $x < $sugar; $x++)
                            {
                                echo "<img src='Images/sugar.jpg' style='width:50px;height:50px;'>";

                            }
                            echo "<br>";
                        }
                    }
                }
            }
            
            function error()
            {
                $nocoffee = $_POST["no_coffee"];
                $size = $_POST["size"];
                $cream = $_POST["no_cream"];
                $sugar = $_POST["no_sugar"];
                
                if (empty($nocoffee))
                {
                    echo "<p>Number of Coffee is required</p>";
                    echo "<br>";
                }
                
                 
                
                if ($cream < 0)
                {
                    echo "<p>Please enter a Valid Number of Cream</p>";
                    echo "<br>";
                }
                
                if ($sugar < 0)
                {
                    echo "<p>Please enter a Valid Number of Sugar</p>";
                    echo "<br>";
                }              
            }
            
            function price()
            {
                $nocoffee = $_POST["no_coffee"];
                $size = $_POST["size"];
                if ($size == "small")
                {
                    $coffeeprice = 1.85;
                    $tax = 0.13;
                    $price = $coffeeprice * $nocoffee * $tax;
                    $finalprice = ($coffeeprice + $price) * $nocoffee;
                    $final_price_formatted = "$" . number_format($finalprice,2);
                    echo "<h2>Your Total</h2>";
                    
                    if ($nocoffee < 0)
                    {
                        echo "<p>Please enter a Valid Number of Coffee</p>";
                    }
                    else
                    {
                        echo "<div class='price'>";
                        echo "$$coffeeprice x $nocoffee + tax = $final_price_formatted";
                        echo "</div>";
                    }
                    
                }
                elseif ($size == "medium")
                {
                    $coffeeprice = 2.10;
                    $tax = 0.13;
                    $price = $coffeeprice * $nocoffee * $tax;
                    $finalprice = ($coffeeprice + $price) * $nocoffee;
                    $final_price_formatted = "$" . number_format($finalprice,2);
                    echo "<h2>Your Total</h2>";
                    
                    if ($nocoffee < 0)
                    {
                        echo "<p>Please enter a Valid Number of Coffee</p>";
                    }
                    else
                    {
                        echo "<div class='price'>";
                        echo "$$coffeeprice x $nocoffee + tax = $final_price_formatted";
                        echo "</div>";
                    }
                }
                elseif ($size == "large")
                {
                    $coffeeprice = 2.45;
                    $tax = 0.13;
                    $price = $coffeeprice * $nocoffee * $tax;
                    $finalprice = ($coffeeprice + $price) * $nocoffee;
                    $final_price_formatted = "$" . number_format($finalprice,2);
                    echo "<h2>Your Total</h2>";
                    
                    if ($nocoffee < 0)
                    {
                        echo "<p>Please enter a Valid Number of Coffee</p>";
                    }
                    else
                    {
                        echo "<div class='price'>";
                        echo "$$coffeeprice x $nocoffee + tax = $final_price_formatted";
                        echo "</div>";
                    }
                }
                elseif ($size == "extra-large")
                {
                    $coffeeprice = 3.10;
                    $tax = 0.13;
                    $price = $coffeeprice * $nocoffee * $tax;
                    $finalprice = ($coffeeprice + $price) * $nocoffee;
                    $final_price_formatted = "$" . number_format($finalprice,2);
                    echo "<h2>Your Total</h2>";
                    
                    if ($nocoffee < 0)
                    {
                        echo "<p>Please enter a Valid Number of Coffee</p>";
                    }
                    else
                    {
                        echo "<div class='price'>";
                        echo "$$coffeeprice x $nocoffee + tax = $final_price_formatted";
                        echo "</div>";
                    }
                }
                
                
                
                
            }
            error();
            order();
            price();
            echo "</div>";
        ?>
        <form action="index.php" method="POST">
            <div class="row">
                    <input type="submit" value="Order Again">
                </div>
        </form>
    </body>
</html>
