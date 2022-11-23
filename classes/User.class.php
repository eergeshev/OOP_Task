<?php

class User extends Dbh {

    public function getAllUsers(){
        $sql = "SELECT * FROM user";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0) {
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }else{
            return $data = [];
        }
    }

    public function getUserById($id){
        $sql = "SELECT * FROM user WHERE id = '$id'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0) {
            $data[] = $result->fetch_assoc();
            return $data;
        }else{
            return $data = [];
        }
    }

    public function setUser($array){
        $columns = implode(", ",array_keys($array));
        $values = implode("', '", array_values($array));

        $sql = "INSERT INTO user( $columns ) VALUES ('$values')";
        $this->connect()->query($sql);
    }

    public function updateUser($id, $name, $age){
        $sql = "UPDATE user SET name = '$name', age = '$age' WHERE id = '$id'";
        $this->connect()->query($sql);
    }
    public function deleteUser($id){
        $sql = "DELETE FROM user WHERE id = '$id'";
        $this->connect()->query($sql);
    }


}