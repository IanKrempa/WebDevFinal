<?php

include_once "dbConnection.php";
include_once "members_model.php";

$message = "Complete the form for Registration";

$action = "";

if (isset($_GET["action"])) {
	$action = $_GET["action"];
} 

//if a form has action = register.php?action=register, we come here
if ($action == "register") {
   // we need to do registration here
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   
   if (($firstname == "") or ($lastname == "") or ($email == "") or ($password == "")){
   	$message = "Some required fields not entered";
   }
   else {
   	$database = new Database();
   	$dbConnection = $database->getConnection();
   
   	$membersModel = new Members($dbConnection);
   	$result = $membersModel->registerMember($firstname, $lastname, $email, $password);
   	if ($result) {
      $message = "Registered!";
   	} else {
   	  $message = "Register Failed";
   	}
   }
   
   
} 

include "register_view.php";

?>