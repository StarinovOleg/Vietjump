<?php

    $database_host = "localhost";
    $database_name = "words";
    $database_user = "root";
    $database_password = "";
      
 $link = mysqli_connect($database_host, $database_user, $database_password, $database_name);
mysqli_query($link, "SET NAMES utf8");





?>