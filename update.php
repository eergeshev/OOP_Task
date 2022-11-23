<?php
    include "includes/autoloader.inc.php";
    $id = $_GET['id'];
    $userOld = new UserController();
    $user = new HomeController();
    $c_user = $user->getElementsById($userOld, $id);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3>Update User</h3>
        <form action="actions/updateuser.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="<?= $c_user[0]['name'] ?>">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input class="form-control"  type="number" name="age" value="<?= $c_user[0]['age'] ?>">
            </div>
            <input type="number" hidden name="user_id" value="<?= $c_user[0]['id'] ?>">
            <div>
                <button class="btn btn-primary" type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>