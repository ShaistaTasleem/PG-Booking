<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($sever, $username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());

    }

    echo "success connecting to the db"
    ?>