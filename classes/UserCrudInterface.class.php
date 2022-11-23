<?php

interface UserCrudInterface {

    public function updateUser($id, $name, $age);
    public function getAllUsers();
}