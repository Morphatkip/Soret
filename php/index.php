<?php
    $servername = "localhost";
    $username = "root";
    $password= "";
    $conn = mysql_connect($servername, $username, $password) or die("unable to coonect to host");
    $sql = mysql_select_db('test',$con) or die ("unable to connect to database");
?>