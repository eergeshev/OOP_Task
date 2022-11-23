<?php
interface CrudInterface {

    public function create(Array $array);
    public function delete($id);
    public function getElementsById($id);
}