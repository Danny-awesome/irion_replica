<?php
require_once 'default.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die('DATABASE_ERROR: '.$conn->connect_error);
}

?>