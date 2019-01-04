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
            <img class="img-responsive" style="height:200px;" src="<?php echo $row['images'] ?>">
            <div class="text-center"><button type="button" data-toggle="modal" data-target="#<?php echo $row['id'] ?>">
                    <?php echo $row['title'] ?>
                </button>
            </div>
            <p class="description">
                <?php echo $row['content'] ?>
            </p>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" /></button>
                        <h3 class="modal-title" id="myModalLabel">
                            <?php echo $row['title'] ?>
                        </h3>
                    </div>
                    <div class="modal-body">
                        <legend>Screen</legend>
                        <p>
                            <div class="text-center">
                                <img style="width:570px;height:300px;" src="<?php echo $row['images'] ?>">
                            </div>
                        </p>
                    </div>
                    <div class="modal-body">
                        <legend>Details</legend>
                        <p>
                            <?php echo $row['body'] ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">DownLoad</button>
                    </div>
                </div>
            </div>
        </div>
        <?php }} ?>
    </div>
</div>
<?php
include_once "main/layout/foot.php";
?>