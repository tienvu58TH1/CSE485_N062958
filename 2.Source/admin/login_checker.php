<?php
 
//nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
if(empty($_SESSION['logged_in'])){
    header("Location: {$home_url}login.php?action=not_yet_logged_in");
}
 
// nếu cấp truy cập không phải là 'Admin', chuyển hướng đến trang đăng nhập
else if($_SESSION['access_level']!="Admin"){
    header("Location: {$home_url}login.php?action=not_admin");
}
 
else{
    // no problem, stay on current page
}
?>