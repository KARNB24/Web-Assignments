<!DOCTYPE html>
<!--
Karn Bhavsar
Student ID: 991578281
SYST10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
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
                    <li><a href="index.php">Home</a></li>
                  <li><a href="#">View Product</a></li>
                  <li><a href="#">Add Product</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="grid-container">
           
            <form action="login1.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="username">User Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="username" required placeholder="Enter Username" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-75">
                        <input type="password" name="password" required placeholder="Enter Password" >
                    </div>
                </div>
                <div class="row">
                    <center><input type="submit" value="Login"></center>
                </div>

            </form>
        </div>
        <?php
                if(isset($_REQUEST['result']))
                {
                    if($_REQUEST['result']=="fail")
                    {
                        echo '<div class="alert">';
                        echo '<span class="closebtn">';
                        echo "&times;";
                        echo '</span>';
                        echo ' <strong>Fail!</strong> Login Failed';
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
