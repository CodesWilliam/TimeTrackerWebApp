<?php
// used to get mysql database connection
class Database{
 
    // specify your own database credentials
    private $host = "logindb.ravensbard.studio";
    private $db_name = "login_admin";
    private $username = "login_admin";
    private $password = "RavensBard2017";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>