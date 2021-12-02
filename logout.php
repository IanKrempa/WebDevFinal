<body style="background-color:#c2d2ff">

<?php

session_start();
$_SESSION = [];
session_destroy();

include "logout_view.php";
?>
