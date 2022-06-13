<?php
include '../main/paths.php';
session_start();
session_destroy();
header("location:../index.php");
?>