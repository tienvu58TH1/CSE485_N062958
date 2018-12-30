<?php
    include('header.php');
    include('config.php');
?>
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding:0px;">
        <div class="container">
                <a class="navbar-brand" href="home.php">TRANG CHỦ</a>
                <a class="navbar-brand" href="game.php">GAMES</a>
                <a class="navbar-brand" href="tienich.php">TIỆN ÍCH</a>
                <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                </ul><span class="navbar-text actions"> <a href="Login.php" class="login"><b class="fw" >Đăng Nhập </b></a><a class="btn btn-light action-button" role="button" href="Register.php"><b>Đăng Ký</b></a></span>
                <ul class="nav navbar-nav ml-auto" id="us" style="display: none">
                    <li class="dropdown show"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true" href="#" style="padding:10px;">user<img src="image/user.png" style="width:30px;height:30px;padding:0;margin-left:5px;"></a>
                        <div class="dropdown-menu show"
                            role="menu"><a class="dropdown-item" role="presentation" href="#">Đăng Xuất <i class="fa fa-user-times" id="logouticon"></i></a></div>
                    </li>
                </ul>
                <ul class="nav navbar-nav"></ul>
        </div>
    </nav>
    </div>
    <br>
    <div id="tt">
    <div class="slideshow-container">
            <div>
                    <h1 class="text-center">WEBSITE GAME GIẢI TRÍ</h1>
                </div>
                <br>
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fad">
            <div class="numbertext">1 / 6</div>
            <img src="image/banner-Team.jpg" style="width:100%">
            <div class="text">Caption Text</div>
            </div>
        
            <div class="mySlides fad">
            <div class="numbertext">2 / 6</div>
            <img src="image/banner-Avatar.png" style="width:100%">
            <div class="text">Caption Two</div>
            </div>
        
            <div class="mySlides fad">
            <div class="numbertext">3 / 6</div>
            <img src="image/nj.png" style="width:100%">
            <div class="text">Caption Three</div>
            </div>
        
            <div class="mySlides fad">
                <div class="numbertext">4 / 6</div>
                <img src="image/banner-Knight.jpg" style="width:100%">
                <div class="text">Caption four</div>
            </div>

            <div class="mySlides fad">
                    <div class="numbertext">5 / 6</div>
                    <img src="image/banner-Army3.png" style="width:100%">
                    <div class="text">Caption five</div>
            </div>

            <div class="mySlides fad">
                    <div class="numbertext">6 / 6</div>
                    <img src="image/banner_OnePiece.jpg" style="width:100%">
                    <div class="text">Caption six</div>
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span> 
            <span class="dot" onclick="currentSlide(6)"></span> 
        </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2018</p>
        </footer>
    </div>
    </div>
<?php
    include('footer.php');
?>