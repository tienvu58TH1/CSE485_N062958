<div style="text-align=center;display:inline;">
    <form action="Search.php" method="get">
        Search: <input type="text" name="search" />
        <input type="submit" name="ok" value="search" />
    </form>
</div>
<br>
<div style="margin-left:940px;">
<a href="add_user.php"><button type='button'>Add</button></a>
<a href="update_user.php"><button type='button'>Update</button></a>
<a href="delete_user.php"><button type='button'>Delete</button></a>
</div>
<?php
// hien thi neu so luong nguoi dung truy xuat > 0
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>Firstname</th>";
        echo "<th>Lastname</th>";
        echo "<th>Email</th>";
        echo "<th>Contact Number</th>";
        echo "<th>Access Level</th>";
    echo "</tr>";
 
    // loop through the user records/lặp qua hồ sơ người dùng
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$firstname}</td>";
            echo "<td>{$lastname}</td>";
            echo "<td>{$email}</td>";
            echo "<td>{$contact_number}</td>";
            echo "<td>{$access_level}</td>";
        echo "</tr>";
        }
 
    echo "</table>";
    
 
    $page_url="read_users.php?";
    $total_rows = $user->countAll();
 
    // actual paging buttons/nút phân trang thực tế
    include_once 'paging.php';
    
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No users found.</strong>
    </div>";
}
?>