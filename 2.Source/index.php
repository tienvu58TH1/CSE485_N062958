<?php
include_once "main/layout/head.php";
$page_title = 'Home';
?>
    <div class="projects-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">WEBSITE GAME GIẢI TRÍ</h2>
                <p class="text-center">Tổng hợp những game nhẹ nhàng không cần cày kéo quá mệt mỏi phù hợp cho game thủ giải trí&nbsp;</p>
            </div>
        </div>
    </div>
    <br>
    <!-- Slideshow container -->
    <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fad">
            <div class="numbertext">1 / 6</div>
            <img src="main/assets/img/banner-Team.jpg" style="width:100%">
            <div class="text">Caption Text</div>
            </div>
        
            <div class="mySlides fad">
            <div class="numbertext">2 / 6</div>
            <img src="main/assets/img/banner-Avatar.png" style="width:100%">
            <div class="text">Caption Two</div>
            </div>
        
            <div class="mySlides fad">
            <div class="numbertext">3 / 6</div>
            <img src="main/assets/img/nj.png" style="width:100%">
            <div class="text">Caption Three</div>
            </div>
        
            <div class="mySlides fad">
                <div class="numbertext">4 / 6</div>
                <img src="main/assets/img/banner-Knight.jpg" style="width:100%">
                <div class="text">Caption four</div>
            </div>

            <div class="mySlides fad">
                    <div class="numbertext">5 / 6</div>
                    <img src="main/assets/img/banner-Army3.png" style="width:100%">
                    <div class="text">Caption five</div>
            </div>

            <div class="mySlides fad">
                    <div class="numbertext">6 / 6</div>
                    <img src="main/assets/img/banner_OnePiece.jpg" style="width:100%">
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
    </div>
<?php
    include "main/layout/foot.php";
?>