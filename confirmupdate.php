<?php

include 'vendor/autoload.php';

$email = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$id = $_POST['id'];
$message=$_POST['message'];


$user = new \Classes\User();

$user->setFirstName($firstName);
$user->setEmail($email);
$user->setLastName($lastName);
$user->setmessage($message);
$user->setid($id);
if ($user->update()) {
    header('location:list.php');
}
