<?php
// core configuration
include_once "config/core.php";
 
// set page title
$page_title = "Login";
 
// include login checker
$require_login=false;
include_once "login_checker.php";
 
// default to false
$access_denied=false;
 
// post code will be here
// if the login form was submitted
if($_POST){
    // email check will be here
    // include classes
    include_once "config/database.php";
    include_once "objects/user.php";
    
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
    
    // initialize objects/khởi tạo đối tượng
    $user = new User($db);
    
    // check if email and password are in the database
    $user->email=$_POST['email'];
    
    // check if email exists, also get user details using this emailExists() method/ kiểm tra xem mail có tồn tại không bằng emailExists
    $email_exists = $user->emailExists();
    
    // login validation will be here
    // validate login/ xác thực đăng nhập
    if ($email_exists && password_verify($_POST['password'], $user->password) && $user->status==1){
    
        // if it is, set the session value to true/nếu có, đặt giá trị phiên thành đúng
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user->id;
        $_SESSION['access_level'] = $user->access_level;
        $_SESSION['firstname'] = htmlspecialchars($user->firstname, ENT_QUOTES, 'UTF-8') ;
        $_SESSION['lastname'] = $user->lastname;
    
        // if access level is 'Admin', redirect to admin section/nếu cấp truy cập là 'Quản trị viên', hãy chuyển hướng đến phần quản trị viên
        if($user->access_level=='Admin'){
            header("Location: {$home_url}admin/index.php?action=login_success");
        }
    
        // else, redirect only to 'Customer' section/ chuyển hướng đến trag customer
        else{
            header("Location: {$home_url}index_customer.php?action=login_success");
        }
    }
    
    // if username does not exist or password is wrong/ sai
    else{
        $access_denied=true;
    }
}
 
// login form html will be here
// include page header HTML
include_once "layout/layout_head.php";
 
echo "<div class='col-sm-6 col-md-4 col-md-offset-4'>";
 
    // alert messages will be here
    // get 'action' value in url parameter to display corresponding prompt messages/nhận giá trị 'hành động' trong tham số url để hiển thị thông báo nhắc tương ứng
    $action=isset($_GET['action']) ? $_GET['action'] : "";
    
    // tell the user he is not yet logged in/ nói với người dùng rằng anh ta chưa đăng nhập
    if($action =='not_yet_logged_in'){
        echo "<div class='alert alert-danger margin-top-40' role='alert'>Please login.</div>";
    }
    
    // tell the user to login/ nói về người dùng để đăng nhập
    else if($action=='please_login'){
        echo "<div class='alert alert-info'>
            <strong>Please login to access that page.</strong>
        </div>";
    }
    
    // tell the user if access denied/thông báo truy cập bị từ chối
    if($access_denied){
        echo "<div class='alert alert-danger margin-top-40' role='alert'>
            Access Denied.<br /><br />
            Your username or password maybe incorrect
        </div>";
    }
 
    // actual HTML login form
    echo "<div class='account-wall'>";
        echo "<div id='my-tab-content' class='tab-content'>";
            echo "<div class='tab-pane active' id='login'>";
                echo "<img class='profile-img' src='images/login-icon.png'>";
                echo "<form class='form-signin' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
                    echo "<input type='text' name='email' class='form-control' placeholder='Email' required autofocus />";
                    echo "<input type='password' name='password' class='form-control' placeholder='Password' required />";
                    echo "<input type='submit' class='btn btn-lg btn-primary btn-block' value='Log In' />";
                    echo "<div class='margin-1em-zero text-align-center'><a href='{$home_url}forgot_password'>Forgot password?</a></div>";
                echo "</form>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
 
echo "</div>";
 
// footer HTML and JavaScript codes
include_once "layout/layout_foot.php";
?>