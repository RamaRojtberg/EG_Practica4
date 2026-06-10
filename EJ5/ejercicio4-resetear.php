<?php
session_start();

session_destroy();

header("Location: ejercicio4.php");
exit;
?>