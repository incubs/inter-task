<?php
include 'vendor/autoload.php';
$id=$_GET['id'];
$user = new \Classes\User();
$user->setid($id);
if ($user->delete()) {
    header('location:list.php');
}