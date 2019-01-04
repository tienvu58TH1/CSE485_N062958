<nav class="navbar navbar-default navigation-clean" style="padding:0px;">
        <div class="container">
            <div class="navbar-header">
                <!-- to enable navigation dropdown when viewed in mobile device -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
    
                <!-- Change "Your Site" to your site name -->
                <a class="navbar-brand" href="index.php">HOME</a>
                <a class="navbar-brand" href="games.php">GAMES</a>
                <a class="navbar-brand" href="#">FORUM</a>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <?php
                    include_once "config/core.php";
                    include_once "login_checker.php";
                    $access_denied = false; 
                ?>
                <div class="login-me" >
                <?php
                // check if users / customer was logged in
                // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
                    ?>
                    <a class="btn btn-light action-button" style="color:white;" href="index_customer.php"><?php echo $_SESSION['firstname']; ?></button></a>
                    </a>
                    <?php
                        }       
                        // if user was not logged in, show the "login" and "register" options
                    else{
                    ?>
                    <div >
                    <a href="index_customer.php" style="color:white;">Login</a>
                    <a href="register.php" style="color:white;" >Register</a>
                    </div>
                    <?php
                        }
                    ?>
                </div>
        </div>
        </div>
    </nav>