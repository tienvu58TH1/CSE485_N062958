<?php
// core configuration
include_once "../config/core.php";
 
// set page title
$page_title = "Update Games";
 
// include login checker
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/game.php';
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // registration form HTML will be here
    // code when form was submitted will be here
    // if form was posted
    if($_POST){
    
        // get database connection
        $database = new Database();
        $db = $database->getConnection();
    
        // initialize objects
        $game = new Game($db);

        $game->title=$_POST['title'];
    
        // check if email already exists
        if($game->titleExists()){
            $game->content=$_POST['content'];
            $game->body=$_POST['body'];
            $game->images=$_POST['images'];

            // create the games
            if($game->updateGames()){
                echo "<div class='alert alert-success' role='alert'> Game was updated </div>";
           
                // empty posted values
                $_POST=array();
            
            }else{
                echo "<div class='alert alert-danger' role='alert'>Unable to update. Please try again.</div>";
            }
        }
    
        else{
            echo "<div class='alert alert-danger'>";
                echo "The title you specified has not been registered. Please try again ";
            echo "</div>";          
        }
    }
    ?>
    <form action='update_games.php' method='post' id='update_games'>
    
        <table class='table table-responsive'>
        
        <tr>
            <td class='width-30-percent'>Title</td>
            <td><input type='text' name='title' class='form-control' required value="<?php echo isset($_POST['title']) ? htmlspecialchars($_POST['title'], ENT_QUOTES,'UTF-8') : "";  ?>" /></td>
        </tr>

        <tr>
            <td>Content</td>
            <td><textarea name='content' class='form-control' required><?php echo isset($_POST['content']) ? htmlspecialchars($_POST['content'], ENT_QUOTES,'UTF-8') : "";  ?></textarea></td>
        </tr>

        <tr>
            <td>Body</td>
            <td><textarea name='body' class='form-control' required><?php echo isset($_POST['body']) ? htmlspecialchars($_POST['body'], ENT_QUOTES,'UTF-8') : "";  ?></textarea></td>
        </tr>

        <tr>
            <td>Image</td>
            <td><input type='text' name='images' class='form-control' required value="<?php echo isset($_POST['images']) ? htmlspecialchars($_POST['images'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span> Update
                </button>
            </td>
        </tr>

    </table>
    </form>
    <?php
 
echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>