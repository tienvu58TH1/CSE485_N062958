<?php
// login checker for 'admin' access level
 
//nếu giá trị phiên trống, anh ta chưa đăng nhập, hãy chuyển hướng đến trang đăng nhập
if(empty($_SESSION['logged_in'])){
    header("Location: {$home_url}login.php?action=not_yet_logged_in");
}
 
// nếu cấp truy cập không phải là 'Quản trị viên', hãy chuyển hướng đến trang đăng nhập
else if($_SESSION['access_level']!="Admin"){
    header("Location: {$home_url}login.php?action=not_admin");
}
 
else{
    // no problem, stay on current page
}
?>