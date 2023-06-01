<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
unset($_SESSION['username']);
header ("location:http://resiastur.local/");
?>

