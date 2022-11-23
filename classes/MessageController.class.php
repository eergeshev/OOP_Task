<?php


class MessageController implements CrudInterface {


    public function getElementsById($id)
    {
        $data = new Message();
        $data = $data->getElementsById($id);
        return $data;
    }

    public function create(array $array){

        $data = new Message();
        $data->create($array);
    }

    public function delete($id)
    {
        $data = new Message();
        $data->delete($id);
    }
}