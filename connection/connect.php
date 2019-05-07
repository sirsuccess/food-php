<?php

$localhost   = 'localhost';
$server	= 'root';
$password	= 'blessing';
$dbname	= 'food';

$con = new mysqli($localhost, $server, $password, $dbname);

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}

/* end of file */
