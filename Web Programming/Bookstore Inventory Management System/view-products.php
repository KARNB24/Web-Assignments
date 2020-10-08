<?php
    // include check_session.php to check if the session exists
    require_once './check-session.php';
    ob_start();
    session_start();
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
        <title>VIEW PRODUCTS</title>
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
                    
                    <li class="active"><a href="view-products.php">View Product</a></li>
                    <li><a href="add-product.php">Add Product</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
                </ul>
            </div>
        </nav>
        <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
        <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search"></center>
        <table id="myTable">
            <tr>
                <th>Book Name</th>
                <th>Author</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                
            </tr>
        
        <?php
            require_once './config.php';
            $query="select * from tblBook";
            $result=mysqli_query($conn,$query);
            if((mysqli_num_rows($result))>0)
            {
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
                    
                    echo "<tr>";
                    echo "<td>";
                    echo $row['Book_Name'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Author'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Quantity'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Price'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Total_Price'];
                    echo "</td>";
                    echo "</tr>";
                    
                    
                    
                    
                }
                echo "</table>";
                        
                        
            }
            else
            {
                echo "<p>There are no products in the table. Please ADD the Products first</p>";
            }
        ?>
        
        <script>
            function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
        </script>
    </body>
</html>
