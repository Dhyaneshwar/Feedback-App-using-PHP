<?php

    /*
        1. Open the "phpmyadmin" in order to work on the MySql database
        2. Click on the DATABASES tab and type the name of the new db taht needs to be created.
        3. Then a new page will open, asking for table name and nunber of columns. Click Go.
        4. Now enter the column names and add the required constraints.
        5. As a result a new DB and a table is created.

        PROVIDING PERMISSIONS
        1. Select the DB for which the privileges needs to be given.
        2. Click on "Add User Account"
        3. Fill the login information.
        4. Click on Check All button in the Global Privileges and click on Go.
        5. The permissions is created. Use those permission below to establish DB connection.
    */
    define('DB_HOST', 'localhost');
    define('DB_USER', 'Dhyan');
    define('DB_PASS', 'password');
    define('DB_NAME', 'php_dev');

    // Create connection
    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if ($conn->connect_error){
        echo "Connection failed";
        die("Connection failed" . $conn->connect_error);
    }
?>