<?php

class Message extends Dbh {


    public function getElementsById($id)
    {
        $sql = "SELECT * FROM message WHERE user_id = '$id'";
        $result = $this->connect()->query($sql);

        $numRows = $result->num_rows;

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }else{
            return $data = [];
        }
    }

    public function create(array $array){
        $columns = implode(", ",array_keys($array));
        $values = implode("', '", array_values($array));

        $sql = "INSERT INTO message ( $columns ) VALUES ( '$values' )";
        $this->connect()->query($sql);
    }


    public function delete($id){
        $sql = "DELETE FROM message WHERE id = '$id'";
        $this->connect()->query($sql);
    }
}