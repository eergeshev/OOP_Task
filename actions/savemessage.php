<?php
    date_default_timezone_set('Asia/Bishkek');

    $message = $_POST['message'];
    $user_id = $_POST['user_id'];
    $created_at = date("Y-m-d h:m:s");
    $updated_at = date("Y-m-d h:m:s");

    $array = ['message' => $message, 'user_id' => $user_id, 'created_at' => $created_at, 'updated_at' => $updated_at];

    include '../classes/CrudInterface.class.php';
    include '../classes/Dbh.class.php';
    include '../classes/HomeController.class.php';
    include '../classes/MessageController.class.php';
    include '../classes/Message.class.php';

    $newMess = new MessageController();
    $newMessage = new HomeController();
    $newMessage->create($newMess, $array);


    header('Location: ../view.php?id='.$user_id);
