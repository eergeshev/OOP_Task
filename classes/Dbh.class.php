<?php

class Dbh {

    protected function database_1(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
        return $conn;
    }

    protected function database_2(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
        return $conn;
    }


    protected function connect(){
        return $this->database_2();
    }




}