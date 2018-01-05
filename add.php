<?php

include 'vendor/autoload.php';

$email = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$message=$_POST['message'];

$user = new \Classes\User();
$user->setFirstName($firstName);
$user->setEmail($email);
$user->setLastName($lastName);
$user->setmessage($message);
if ($user->insert()) {
    header('location:list.php');
}
