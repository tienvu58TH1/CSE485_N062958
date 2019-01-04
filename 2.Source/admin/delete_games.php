<?php
// core configuration
include_once "../config/core.php";
 
// set page title
$page_title = "Delete Game";
 
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
    
        // set user email to detect if it already exists
        $game->title=$_POST['title'];
    
        // check if email already exists
        if($game->titleExists()){

            if($game->deleteGames()){
                echo "<div class='alert alert-success' role='alert'> Game was deleted </div>";
           
                // empty posted values
                $_POST=array();
            
            }else{
                echo "<div class='alert alert-danger' role='alert'>Unable to deleted.</div>";
            }
        }
    
        else{
            echo "<div class='alert alert-danger'>";
                echo "The title you specified has not been registered. Please try again ";
            echo "</div>";
            
        }
    }
    ?>
    <form action='delete_games.php' method='post' id='delete_games'>
    
        <table class='table table-responsive'>

            <tr>
                <td class='width-30-percent'>Title</td>
                <td><input type='text' name='title' class='form-control' required value="<?php echo isset($_POST['title']) ? htmlspecialchars($_POST['title'], ENT_QUOTES,'UTF-8') : "";  ?>" /></td>
            </tr> 
    
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span> Delete
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