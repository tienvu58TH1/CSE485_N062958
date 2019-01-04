<?php
// core configuration
include_once "../config/core.php";
 
// kiểm tra nếu đăng nhập với tư cách quản trị viên
include_once "login_checker.php";
 
// set page title
$page_title="Admin";
 
// include page header HTML
include 'layout_head.php';
 
    echo "<div class='col-md-12'>";
 
        // nhận các giá trị tham số và để ngăn thông báo chỉ mục không xác định
        $action = isset($_GET['action']) ? $_GET['action'] : "";
 
        // nói với người dùng anh ta đã đăng nhập
        if($action=='already_logged_in'){
            echo "<div class='alert alert-info'>";
                echo "<strong>You</strong> are already logged in.";
            echo "</div>";
        }
 
        else if($action=='logged_in_as_admin'){
            echo "<div class='alert alert-info'>";
                echo "<strong>You</strong> are logged in as admin.";
            echo "</div>";
        }
 
        echo "<div class='alert alert-info'>";
            echo "Contents of your admin section will be here.";
        echo "</div>";
 
    echo "</div>";
 
// include page footer HTML
include_once 'layout_foot.php';
?>