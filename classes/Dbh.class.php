<?php

class Dbh {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "test_db";

    protected function connect(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;
    }
}