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
<div class="container-fluid">
	<div class="row" >
		<div class="col-md-4 offset-md-4" id="Lg" style="background-color: rgba(192, 192, 192, 0.692);margin-top: 15px;padding-top: 40px ; border-style: groove;">
			<h2 class="text-center"> Hệ Thống Đăng Nhập</h2>
			<br>
			<form action="checkLogin.php" method="POST" id="LoginForm">
				<div class="form-group">					 
					<label>
						Tên tài khoản
					</label>
                    <input type="text" class="form-control" name="userName" />
				</div>
				<div class="form-group">					 
					<label>
						Mật khẩu    
					</label>
					<input type="password" class="form-control" name="userPass" />
                </div>
				<button type="submit" class="btn btn-primary">
					Đăng nhập
                </button>
			</form>
			<br>
			<br>
        </div>
	</div>
</div>
<?php
    include('footer.php');
?>