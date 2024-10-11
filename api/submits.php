<?php
$email = $_GET["email"];

if(isset($email) && !empty($email)){
echo $email;
}
var_dump($_GET["email"])
?>