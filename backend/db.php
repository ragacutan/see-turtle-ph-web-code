<?php

    // Db credentials
    $host_name = "localhost";
    $db_name = "yqkznkhu_db_turtle";
    $username = "yqkznkhu_root";
    $password = "seeturtlephadmin@123";
    
    // Connect to a databse (hostname, username, password and database name)
    $connection = mysqli_connect($host_name, $username, $password, $db_name);

    if(!$connection) {
        die("Connection failed : " . mysqli_connect_error());
    }
?>