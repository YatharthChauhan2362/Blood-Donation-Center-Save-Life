<?php

session_start();
session_destroy();
$_SESSION['']= "";

header("Localhost: ../index.php");