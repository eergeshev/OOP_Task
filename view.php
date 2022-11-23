<?php
    include "includes/autoloader.inc.php";
    $id = (int)$_GET['id'];
    $user = new UserController();
    $users = new HomeController();
    $user = $users->getElementsById($user, $id);

    $message = new MessageController();
    $messages = new HomeController();
    $messages = $messages->getElementsById($message, $id);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Update user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <a href="index.php" class="btn btn-primary">Home</a>
    <h3 class="user-header">User page</h3>
    <p class="user-name"><span>Name:</span><span><?= $user[0]['name'] ?></span></p>
    <p class="user-name"><span>Age:</span><span><?= $user[0]['age'] ?></span></p>

    <hr>

    <h4 class="message-header">Messages</h4>
    <?php foreach ($messages as $message) { ?>
        <p style="font-size: 16px;"><?= $message['message'] ?><a style="margin-left: 10px; color: red"
                        href="actions/deletemessage.php?id=<?= $message['id'] ?>&user_id=<?= $user[0]['id'] ?>">&#10006;</a></p>
        <p  style="color: #8a8989;"><?= $message['created_at'] ?> </p>
        <br>
    <?php } ?>

    <hr>

    <form action="actions/savemessage.php" method="post" >
        <input type="number" hidden name="user_id" value="<?= $user[0]['id'] ?>">

        <div class="form-group">
            <input class="form-control" type="text" name="message" placeholder="New message..." required>
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Save message</button>
        </div>
    </form>

</div>
</body>
</html>