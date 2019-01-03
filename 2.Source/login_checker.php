<?php
// login checker for 'customer' access level
 
if(isset($_SESSION['access_level']) && $_SESSION['access_level']=="Admin"){
    header("Location: {$home_url}admin/index.php?action=logged_in_as_admin");
}
 
// if $require_login was set and value is 'true'/ nếu $require_login= true
else if(isset($require_login) && $require_login==true){
    // if user not yet logged in, redirect to login page/nếu người dùng chưa đăng nhập, hãy chuyển hướng đến trang đăng nhập
    if(!isset($_SESSION['access_level'])){
        header("Location: {$home_url}login.php?action=please_login");
    }
}
 
// if it was the 'login' or 'register' or 'sign up' page but the customer was already logged in/nếu đó là trang 'đăng nhập' hoặc 'đăng ký'nhưng khách hàng đã đăng nhập
else if(isset($page_title) && ($page_title=="Login" || $page_title=="Sign Up")){
    // if user not yet logged in, redirect to login page
    if(isset($_SESSION['access_level']) && $_SESSION['access_level']=="Customer"){
        header("Location: {$home_url}index_customer.php?action=already_logged_in");
    }
}
 
else{
    // no problem, stay on current page
}
?>