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
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h1 class="text-center">TIỆN ÍCH</h1>
                <p class="text-center">Đọc truyện hay, thư giãn giải lao những giây phút căng thẳng.</p>
            </div>
            <br>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">
                                <a href="#">Tổng hợp truyện hay</a>
                               </h3>
                            <p class="description">Tổng hợp truyện full đã hoàn thành hay nhất với nội dung chất lượng hàng đầu Việt Nam.<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">
                                <a href="">Truyện cười thư giãn</a>
                                </h3>
                            <p class="description">Tuyển tập&nbsp;truyện cười&nbsp;dân gian Việt Nam gồm 15 phần mang lại tiếng cười&nbsp;thư giãn&nbsp;đậm chất dân gian Việt Nam.<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="">Tổng hợp truyện ma</a>
                                </h3>
                            <p class="description">Đọc truyện ma mới nhất được cập nhật liên tục bao gồm những truyện ma&nbsp;có Thật , Nguyễn Ngọc Ngạn , Người Khăn Trắng ,&nbsp;truyện ma kinh dị ...<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/minibus.jpeg"></a></div>
                        <div class="col">
                            <h3 class="name"><a href="">Những lời chúc ngọt ngào</a>
                                </h3>
                            <p class="description">Tổng hợp những lời chúc hay nhất cho những ngày sự kiện, ngày lễ,....</p>
                        </div>
                    </div>
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