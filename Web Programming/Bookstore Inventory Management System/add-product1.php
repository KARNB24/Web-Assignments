<?php
    ob_start();
    session_start();
    $bookName=$_REQUEST['Book_name'];
    $author=$_REQUEST['Author'];
    $quantity=$_REQUEST['Quantity'];
    $price=$_REQUEST['Price'];
    $total=$quantity*$price;
    
    
    require_once './config.php';
    
    
    
    $query = "insert into tblBook (Book_Name, Author, Quantity, Price, Total_Price) values ('$bookName', '$author', $quantity, $price, $total)";
    $result=mysqli_query($conn, $query);
    
    if($result>0)
    {
        header("location:./add-product.php?result=Success");
        ob_end_flush();
        die();
    }
    else
    {
        header("location:./add-product.php?result=Fail");
        
    }
?>
