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
    <div class="projects-clean">
        <div class="container">
            <div class="intro">
                <h1 class="text-center">GAMES</h1>
                <p class="text-center">Các trò chơi dành cho người trên 12 tuổi. Chơi quá 180 phút mỗi ngày sẽ gây hại cho sức khỏe.</p>
            </div>
            <br>
            <div class="row projects">
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="image/avt.jpg">
                    <h3 class="name">
                        <a href="#">Avatar</a>
                    </h3>
                    <p class="description"><br>Bạn muốn là công dân của thành phố ảo Avatar, bạn sẽ là chính bạn trong thế giới thực hay bạn là ai đó bạn mong muốn<br><br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="image/ninja.png">
                    <h3 class="name"><a href="#">Ninja School</a></h3>
                    <p class="description"><br>Bạn là fan của Ninja, nhân vật anh hùng nửa chánh nửa tà, hành tung bí ẩn nhưng lại có các khả năng phi<br><br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="image/mobi.jpg">
                    <h3 class="name">
                            <a href="#">Mobi Army</a></h3>
                    <p class="description"><br>Năm 2014 tình hình thế giới diễn biến phức tạp, thế chiến thứ 3 có thể bùng nổ bất cứ lúc nào. Một lực lượng vũ trang<br><br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="image/kpah.jpg">
                    <h3 class="name"><a href="#">Khí Phách Anh Hùng</a></h3>
                    <p class="description"><br>Khí Phách Anh Hùng là trò chơi nhập vai cổ trang đầu tiên trên điện thoại di động tại Việt Nam, với số lượng người tham<br><br></p>
                </div>
            </div>
        </div>
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