<?php
ob_start();
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }

