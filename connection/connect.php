<?php

$localhost   = 'www.db4free.net';
$server	= 'sirsuccess';
$password	= 'blessing';
$dbname	= 'foodapp';

$con = new mysqli($localhost, $server, $password, $dbname);

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}


/* end of file */
?>

