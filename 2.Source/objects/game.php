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
    function read(){
        $connect = mysqli_connect('localhost', 'root', '', 'php_login_system');       
        mysqli_set_charset($connect, 'UTF8');
        if (!$connect) {
            die('kết nối không thành công ' . mysqli_connect_error());
        }
        $query = "SELECT * FROM `games` ";
        $stmt = mysqli_query($connect, $query);
        return $stmt;

    }
    public function countAll(){
    
        // query to select all user records
        $query = "SELECT id FROM " . $this->table_name . "";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        // get number of rows/lấy số lượng hàng
        $num = $stmt->rowCount();
    
        // return row count
        return $num;
    }
    function readAll($from_record_num, $records_per_page){
    
        // query to read all user records, with limit clause for pagination
        $query = "SELECT
                    id,
                    title,
                    content,
                    body,
                    images
                FROM " . $this->table_name . "
                ORDER BY id ASC
                LIMIT ?, ?";
    
        // prepare query statement/chuẩn bị câu lệnh truy vấn
        $stmt = $this->conn->prepare( $query );
    
        // bind limit clause variables/ràng buộc các biến mệnh đề giới hạn
        $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);
    
        // execute query
        $stmt->execute();
    
        // return values
        return $stmt;
    }
    function create(){
    
        // insert query
        $query = "INSERT INTO " . $this->table_name . "
                SET
            title = :title,
            content = :content,
            body = :body,
            images = :images";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->content=htmlspecialchars(strip_tags($this->content));
        $this->body=htmlspecialchars(strip_tags($this->body));
        $this->images=htmlspecialchars(strip_tags($this->images));
    
        // bind the values/ liên kết các giá trị
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':body', $this->body); 
        $stmt->bindParam(':images', $this->images);
        // execute the query, also check if query was successful/ thực hiện truy vấn, kiểm tra truy vấn
        if($stmt->execute()){
            return true;
        }else{
            $this->showError($stmt);
            return false;
        }
    
    }
    public function showError($stmt){
        echo "<pre>";
            print_r($stmt->errorInfo());
        echo "</pre>";
    }
    function titleExists(){
    
        // query to check if title exists/ truy vấn để kiểm tra nếu title tồn tại
        $query = "SELECT id, content, body, images
                FROM " . $this->table_name . "
                WHERE title = ?
                LIMIT 0,1";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare( $query );
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
    
        // bind given title value/liên kết giá trị title đã cho
        $stmt->bindParam(1, $this->title);
    
        // execute the query/ thực hiện truy vấn
        $stmt->execute();
    
        // get number of rows/ lấy số lượng hàng
        $num = $stmt->rowCount();
    
        // if title exists, assign values to object properties for easy access and use for php sessions/nếu title tồn tại, gán giá trị cho các thuộc tính đối tượng để dễ dàng truy cập và sử dụng cho các phiên php
        if($num>0){
    
            // get record details / values/ lấy thông tin chi tiết
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // assign values to object properties/ gán giá trị cho thuộc tính đối tượng
            $this->id = $row['id'];
            $this->content = $row['content'];
            $this->body = $row['body'];
            $this->images = $row['images'];
    
            // return true because title exists in the database
            return true;
        }
    
        // return false if title does not exist in the database
        return false;
    }
    function updateGames(){
    
        // update query
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    content = :content,
                    body = :body,
                    images = :images
                WHERE
                    title = :title";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->content=htmlspecialchars(strip_tags($this->content));
        $this->body=htmlspecialchars(strip_tags($this->body));
        $this->images=htmlspecialchars(strip_tags($this->images));
    
        // bind the values from the form/ liên kết các giá trị từ biểu mẫu
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':body', $this->body); 
        $stmt->bindParam(':images', $this->images);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }
    function deleteGames(){
        // update query
        $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                    title = :title";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
    
        // bind the values from the form/ liên kết các giá trị từ biểu mẫu
        $stmt->bindParam(':title', $this->title);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }
}   