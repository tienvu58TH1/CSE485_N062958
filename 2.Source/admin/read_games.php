<?php
// core configuration
include_once "../config/core.php";
 
// check if logged in as admin
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/game.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$game = new Game($db);
 
// set page title
$page_title = "Games";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // read all users from the database
    $stmt = $game->readAll($from_record_num, $records_per_page);
 
    // count retrieved users/số người dùng đã truy xuất
    $num = $stmt->rowCount();
 
    // to identify page for paging/xđ trang để phân trang
    $page_url="read_games.php?";
 
    // include products table HTML template
    include_once "read_games_template.php";
 
echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>