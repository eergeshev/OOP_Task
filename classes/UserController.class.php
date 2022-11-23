<?php

class UserController implements CrudInterface, UserCrudInterface {

    public function getAllUsers(){
        $data = new User();
        return $data->getAllUsers();
    }

    public function getElementsById($id){
        $data = new User();
        return $data->getUserById($id);
    }

    public function create(array $array){
        $data = new User();
        $data->setUser($array);
    }

    public function updateUser($id, $name,  $Age)
    {
        $data = new User();
        $data->updateUser($id, $name,  $Age);
    }

    public function delete($id)
    {
        $data = new User();
        $data->deleteUser($id);
    }


}