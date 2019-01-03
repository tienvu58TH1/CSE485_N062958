<?php
class Game{
 
    // database connection and table name
    private $conn;
    private $table_name = "games";
 
    // object properties
    public $id;
    public $title;
    public $content;
    public $bd;
    public $img;
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    public function showError($stmt){
        echo "<pre>";
            print_r($stmt->errorInfo());
        echo "</pre>";
    }
    function readAll(){
        $connect = mysqli_connect('localhost', 'root', '', 'php_login_system');       
        mysqli_set_charset($connect, 'UTF8');
        if (!$connect) {
            die('kết nối không thành công ' . mysqli_connect_error());
        }
        $query = "SELECT * FROM `games` ";
        $stmt = mysqli_query($connect, $query);
        return $stmt;

    }
}   