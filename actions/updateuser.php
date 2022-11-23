<?php

    $name = $_POST['name'];
    $age = $_POST['age'];
    $id = $_POST['user_id'];

    include '../classes/UserCrudInterface.class.php';
    include '../classes/CrudInterface.class.php';
    include '../classes/Dbh.class.php';
    include '../classes/HomeController.class.php';
    include '../classes/UserController.class.php';
    include '../classes/User.class.php';

    $us = new UserController();
    $user = new HomeController();
    $user->updateUser($us, $id, $name, $age);

    header('Location: ../index.php');
