<?php 

    include('config.php');
    $userName = $_POST['userName'];
    $password = $_POST['userPass'];
    $sql= " SELECT * FROM users WHERE userName='$userName' and password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo 'welcome '.$userName;
    }
    else{
        echo ' user k ton tai hoac sai pass';
    }
?>