<div style="text-align=center;display:inline;">
    <form action="Search.php" method="get">
        Search: <input type="text" name="search" />
        <input type="submit" name="ok" value="search" />
    </form>
</div>
<br>
<div style="margin-left:940px;">
<a href="add_games.php"><button type='button'>Add</button></a>
<a href="update_games.php"><button type='button'>Update</button></a>
<a href="delete_games.php"><button type='button'>Delete</button></a>
</div>
<?php
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
        echo "<th>Title</th>";
        echo "<th>Content</th>";
        echo "<th>Body</th>";
        echo "<th>Images</th>";
    echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display games details
        echo "<tr>";
            echo "<td>{$title}</td>";
            echo "<td>{$content}</td>";
            echo "<td>{$body}</td>";
            echo "<td>{$images}</td>";
        echo "</tr>";
        }
 
    echo "</table>";
    
 
    $page_url="read_games.php?";
    $total_rows = $game->countAll();
 
    // actual paging buttons/nút phân trang thực tế
    include_once 'paging.php';
    
}
 
// tell the user there are no selfies
else{
    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
        echo "<th>Title</th>";
        echo "<th>Content</th>";
        echo "<th>Body</th>";
        echo "<th>Images</th>";
    echo "</tr>";
}
?>