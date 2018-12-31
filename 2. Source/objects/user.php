<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $contact_number;
    public $address;
    public $password;
    public $access_level;
    public $access_code;
    public $status;
    public $created;
    public $modified;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // check if given email exist in the database
    function emailExists(){
    
        // query to check if email exists/ truy vấn để kiểm tra nếu mail tồn tại
        $query = "SELECT id, firstname, lastname, access_level, password, status
                FROM " . $this->table_name . "
                WHERE email = ?
                LIMIT 0,1";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare( $query );
    
        // sanitize
        $this->email=htmlspecialchars(strip_tags($this->email));
    
        // bind given email value/liên kết giá trị email đã cho
        $stmt->bindParam(1, $this->email);
    
        // execute the query/ thực hiện truy vấn
        $stmt->execute();
    
        // get number of rows/ lấy số lượng hàng
        $num = $stmt->rowCount();
    
        // if email exists, assign values to object properties for easy access and use for php sessions/nếu email tồn tại, gán giá trị cho các thuộc tính đối tượng để dễ dàng truy cập và sử dụng cho các phiên php
        if($num>0){
    
            // get record details / values/ lấy thông tin chi tiết
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // assign values to object properties/ gán giá trị cho thuộc tính đối tượng
            $this->id = $row['id'];
            $this->firstname = $row['firstname'];
            $this->lastname = $row['lastname'];
            $this->access_level = $row['access_level'];
            $this->password = $row['password'];
            $this->status = $row['status'];
    
            // return true because email exists in the database
            return true;
        }
    
        // return false if email does not exist in the database
        return false;
    }
    // create new user record
    function create(){
    
        // to get time stamp for 'created' field
        $this->created=date('Y-m-d H:i:s');
    
        // insert query
        $query = "INSERT INTO " . $this->table_name . "
                SET
            firstname = :firstname,
            lastname = :lastname,
            email = :email,
            contact_number = :contact_number,
            address = :address,
            password = :password,
            access_level = :access_level,
                    access_code = :access_code,
            status = :status,
            created = :created";
    
        // prepare the query/ chuẩn bị truy vấn
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->firstname=htmlspecialchars(strip_tags($this->firstname));
        $this->lastname=htmlspecialchars(strip_tags($this->lastname));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->contact_number=htmlspecialchars(strip_tags($this->contact_number));
        $this->address=htmlspecialchars(strip_tags($this->address));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->access_level=htmlspecialchars(strip_tags($this->access_level));
        $this->access_code=htmlspecialchars(strip_tags($this->access_code));
        $this->status=htmlspecialchars(strip_tags($this->status));
    
        // bind the values/ liên kết các giá trị
        $stmt->bindParam(':firstname', $this->firstname);
        $stmt->bindParam(':lastname', $this->lastname);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':contact_number', $this->contact_number);
        $stmt->bindParam(':address', $this->address);
    
        // hash the password before saving to database/băm mật khẩu trước khi lưu vào cơ sở dữ liệu
        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);
    
        $stmt->bindParam(':access_level', $this->access_level);
        $stmt->bindParam(':access_code', $this->access_code);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':created', $this->created);
    
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
    // read all user records/ đọc tất cả người dùng
    function readAll($from_record_num, $records_per_page){
    
        // query to read all user records, with limit clause for pagination
        $query = "SELECT
                    id,
                    firstname,
                    lastname,
                    email,
                    contact_number,
                    access_level,
                    created
                FROM " . $this->table_name . "
                ORDER BY id DESC
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
    // used for paging users/ sử dụng cho phân trang
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
}   