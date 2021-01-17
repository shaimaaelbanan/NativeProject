<?php
class database
{
    public $serverName = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbName = 'e-commerce';
    public $con;
    public function __construct()
    {
        $this->con = new mysqli($this->serverName, $this->username, $this->password, $this->dbName);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        } else {
        }
    }

    public function runDML($query)
    {
        // $result = $this->con->query($query);
        // if($result === TRUE){
        //     return TRUE;
        // }else{
        //     return FALSE;
        // }
        return $this->con->query($query);
    }

    public function runDQL($query)
    {
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return [];
        }
    }
}
