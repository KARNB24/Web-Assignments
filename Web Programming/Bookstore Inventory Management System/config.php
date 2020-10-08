<?php

                    $host='localhost';
                    $username='bhavkarn_karn';
                    $passwd='XJ2D.ZIXw-}c';
                    $dbname='bhavkarn_book';
                    $conn=mysqli_connect($host, $username, $passwd, $dbname);
                    if(empty($conn))
                    {
                        die("Connection failed".mysqli_connect_error());
                    }
