<?php
    $host = "localhost";
    $user = "scntratz_stlinggroupogruser";
    $pass = "Fakepassword@ogr19";
    $db = "scntratz_stlinggroubogr";
    //$db = "swiftBankDatabase2";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die("Database Could not be reaached".mysqli_connect_error());
    }
?>