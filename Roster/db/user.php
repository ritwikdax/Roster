<?php

class User{
  
    // database connection and table name
    public $conn;
    public $table_name = "admin_users";
  
    // object properties
    public $id;
    public $firstname;
    public $lastname;
    public $username;
    public $password;
    public $teamname;
    
  
    public function __construct($db){
        $this->conn = $db;
    }
  

    //Authenticate_users
    public function authenticate($uname, $pword){
        
        $sql= "SELECT * FROM admin_users WHERE user_name='$uname' AND password='$pword'";
        $sth = $this->conn->prepare($sql);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);

        //if row count ==0
        if ($sth->rowCount()==0) {
            # code...
            return null;
        }
        elseif ($sth->rowCount() == 1) {
            //Valid login
            //header('Location')
            return $result; 

        }
        

    }
}
?>