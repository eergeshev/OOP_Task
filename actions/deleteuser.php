
<?php

$id = $_GET['id'];

include '../classes/UserCrudInterface.class.php';
include '../classes/CrudInterface.class.php';
include '../classes/Dbh.class.php';
include '../classes/HomeController.class.php';
include '../classes/UserController.class.php';
include '../classes/User.class.php';

$us = new UserController();
$user = new HomeController();
$user->delete($us, $id);

header('Location: ../index.php');
