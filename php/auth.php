<?php
    include('db.php');
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    checkpass($username, $password);
?>