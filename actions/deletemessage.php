<?php

$id = $_GET['id'];
$user_id= $_GET['user_id'];


include '../classes/CrudInterface.class.php';
include '../classes/Dbh.class.php';
include '../classes/HomeController.class.php';
include '../classes/MessageController.class.php';
include '../classes/Message.class.php';

$mess = new MessageController();
$message = new HomeController();

$message->delete($mess, $id);

header('Location: ../view.php?id='.$user_id);