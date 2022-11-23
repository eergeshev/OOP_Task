<?php
    include "includes/autoloader.inc.php";
    $users = new UserController();
    $us = new HomeController();
    $users = $us->getAllUsers($users);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="padding: 50px">

<div class="container">
    <h3 class="text-center">List of Users</h3>
    <div class="row">
        <table class="table table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) { ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['age'] ?></td>
                    <td><a href="view.php?id=<?= $user['id'] ?>">View</a></td>
                    <td><a href="update.php?id=<?= $user['id'] ?>">Update</a></td>
                    <td><a href="actions/deleteuser.php?id=<?= $user['id'] ?>">Delete</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <hr>

    <h4>Add new User</h4>
    <form action="actions/saveuser.php" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="name" required placeholder="Name...">
        </div>
        <div class="form-group">
            <input class="form-control"  type="number" name="age" required placeholder="Age...">
        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="submit">Save</button>
        </div>
    </form>
</div>
</body>
</html>