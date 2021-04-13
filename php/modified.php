<?php
 include "connection.php"

 if(isset($_GET['id'])){
     $sql = "delete from registration wher id = '"._GET['id']."'2;
     $result = mysql_query($sql);
     $result = mysql_query($sql);   
 }
?>

<html>
 <body>
    <table width = "100%"> border = "1" cellspacing = "1" cellpadding = "1">
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Middle Name</td>
            <td>Last Name</td>
            <td>Password</td>
            <td>Confirm</td>
            <td>Email</td>
            <td colspan ="2">Action</td>
        </tr>
    </table>
 </body>
</html>
