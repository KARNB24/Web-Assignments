<?php
    // include check_session.php to check if the session exists
    require_once './check-session.php';
?>
<!DOCTYPE html>
<!--
Karn Bhavsar
Student ID: 991578281
SYST10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADD PRODUCT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="grid-container-header">
            <div class="header">
                <h1>Bookstore Inventory Management System</h1>
            </div>            
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="view-products.php">View Product</a></li>
                    <li class="active"><a href="add-product.php">Add Product</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
                </ul>
            </div>
        </nav>
        <div class="grid-container">
           
            <form action="add-product1.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="bookname">Book Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="Book_name" required placeholder="Enter Book Name" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="author">Author</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="Author" required placeholder="Enter Author" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="quantity">Quantity</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="Quantity" required placeholder="Enter Quantity" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="price">Price</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="Price" required placeholder="Enter Price" >
                    </div>
                </div>
                
                
                <div class="row">
                    <center><input type="submit" value="Add Product"></center>
                </div>

            </form>
        </div>


        <?php
                if(isset($_REQUEST['result']))
                {
                    if(isset($_REQUEST['result'])=="Success")
                    {
                        echo '<div class="alert success">';
                        echo '<span class="closebtn">';
                        echo "&times;";
                        echo '</span>';
                        echo '<strong>Success!</strong> Product Added';
                        echo '</div>';
                        
                    }
                    elseif(isset($_REQUEST['result'])=="Fail")
                    {
                        echo '<div class="alert">';
                        echo '<span class="closebtn">';
                        echo "&times;";
                        echo '</span>';
                        echo ' <strong>Fail!</strong> Something went wrong';
                        echo '</div>';

                        
                    }
                }
        ?>
        <script>
            var close = document.getElementsByClassName("closebtn");
            var i;

            for (i = 0; i < close.length; i++) {
              close[i].onclick = function(){
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function(){ div.style.display = "none"; }, 600);
              }
            }
        </script>

    </body>
</html>
