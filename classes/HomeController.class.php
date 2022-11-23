<?php


class HomeController
{
    public function getAllUsers(\CrudInterface $crud){

        return $crud->getAllUsers();
    }

    public function getElementsById(\CrudInterface $crud, $id){

        return $crud->getElementsById($id);
    }

    public function create(\CrudInterface $crud, $array)
    {
        $crud->create($array);
    }

    public function updateUser(\UserCrudInterface $crud, $id, $name, $age)
    {
        $crud->updateUser($id, $name, $age);
    }

    public function delete(\CrudInterface $crud, $id){

        $crud->delete($id);
    }
}