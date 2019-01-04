<?php
// core configuration
include_once "config/core.php";
 
// check if logged in as admin
include_once "login_checker.php";
 
// include classes
include_once 'config/database.php';
include_once 'objects/game.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$game = new Game($db);
 
// set page title
$page_title = "Games";
include_once "main/layout/head.php";
?>
<div class="jumbotron text-center">
  <h1>GAMES</h1>
  <p>Game phù hợp cho những người trên 12 tuổi.</p> 
</div>
  
<div class="container">

  <div class="row projects">
  <?php
        //kiểm tra
        $result = $game->read();
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
  ?>
    <div class="col-lg-4 col-sm-6 item" style="border-style: outset;height:350px;">
    <a href="" style="text-decoration: none;">
      <img class="img-responsive" style="height:200px;" src="<?php echo $row['images'] ?>">
      <h3 class="text-center"><?php echo $row['title'] ?></h3>
    </a>
      <p class="description"><?php echo $row['content'] ?></p>
    </div>
            <?php }} ?> 
  </div>
</div>
<?php
include_once "main/layout/foot.php";
?>