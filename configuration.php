<!--author by 11315028 Kevin Jordan Lumban Raja -->
<?php
    
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'goprivate';
    
    global $dbhandle;
    $dbhandle = mysqli_connect($hostname, $username, $password, $db_name) or die("Unable to connect to mysqli");

 ?>
