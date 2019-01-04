<?php
// used to get mysql database connection
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "php_login_system";
    private $username = "root";
    private $password = "";
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
    // private $username;
    // private $pass;
    // private $database;
    // private $severname;
    // public function __construct(){  
    //     $this->severname='localhost';
    //     $this->username='root';
    //     $this->pass='';
    //     $this->database='php_login_system';
    // }
    // public function getConnection(){
    //     $conn=mysqli_connect($this->severname,$this->username,$this->pass,$this->database);
    //     mysqli_set_charset($conn,'utf8');
    //     if(!$conn){
    //         die("ko the ket noi ".mysqli_connect_error());
    //     }
    //     return $conn;
    // }
}
?>