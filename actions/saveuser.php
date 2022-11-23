<?php
    $name = $_POST['name'];
    $age = $_POST['age'];

    $array = ['name' => $name, 'age' => $age ];

    include '../classes/UserCrudInterface.class.php';
    include '../classes/CrudInterface.class.php';
    include '../classes/Dbh.class.php';
    include '../classes/HomeController.class.php';
    include '../classes/UserController.class.php';
    include '../classes/User.class.php';

    $new = new UserController();
    $newUser = new HomeController();
    $newUser->create($new, $array);

    header('Location: ../index.php');
