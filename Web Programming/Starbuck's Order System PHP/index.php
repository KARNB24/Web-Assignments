<!DOCTYPE html>
<!--
Karn Bhavsar
Student ID: 991578281
SYST10199 - Web Programming
-->
<html>  
    <head>
        <meta charset="UTF-8">
        <title>Starbucks's Order</title>
        <link rel="stylesheet" href="CSS/style.css"/>
    </head>
    <body>
        <div class="grid-container-header">
            <div class="header">
                <img src="Images/logo-en.png">
                <h1>Welcome to Starbucks's!</h1>
            </div>            
        </div>
        <div class="grid-container">
            <form action="order.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="nocoffee">Number of Coffees</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="no_coffee" required min="1"placeholder="Please enter the number of coffee" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="size">Size</label>
                    </div>
                    <div class="col-75">
                        <select name="size">
                            <option value="-1" selected>Please Select a Size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="extra-large">Extra Large</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nocream">How many Creams?</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="no_cream" min="1" placeholder="Please enter how many creams you want" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nosugar">How many Sugars?</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="no_sugar" min="1" placeholder="Please enter how many sugars you want" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <center><input type="submit" value="Order Coffee"></center>
                </div>
            </form>
        </div>
        
    </body>
</html>
