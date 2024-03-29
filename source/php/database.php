<?php

// Author: kayley kiesel
// API endpoint establishes database connection for API endpoints.
class Database {

    // IMPORTANT
    // modify these values to match your database/localhost info.
    private $host = 'localhost'; //change to your host, usually it is localhost 
    private $username = 'root'; //change to your username 
    private $password = ''; //change to your password
    private $db_name = 'pokemon';
    


    public $connection;

    // create a connection to database
    // returns database connection
    public function getConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        mysqli_options($this->connection, MYSQLI_OPT_LOCAL_INFILE, true);
            // check for connection
        if(!$this->connection) {
            die('Database connection failed: ' . $this->connection->connect_error);
        }

        return $this->connection;
    }

}
?>