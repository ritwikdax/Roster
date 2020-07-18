<?php
class Database{
   
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "oncallrosterdb";
    private $username = "root";
    private $password = "";
    private $conn;

   
    // get the database connection
    public function getConnection(){
   
        $this->conn = null;
   
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected To Database";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
   
        return $this->conn;
    }

    public function getDbConnection(){
        if ($this->conn instanceof PDO) {
            return $this->conn;
       }
    }
}
?>