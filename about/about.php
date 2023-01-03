<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BuffaPoo - Giới thiệu</title>
    <link rel="icon" href="../logo/logo.ico">
    
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="./about.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <title>About</title>
</head>

<body>

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <!------------------------------------------------------Header----------------------------------------------------->
    <nav class="navbar">
        <a class="logo" href="../home/home.php">
            <img src="../logo/LOGO_S.png" alt="">
        </a>
        <input type="checkbox" id="menu" />
        <label for="menu" class="menu">
            <img height="30px" width="30px" src="../image/icon.png" /></img>
        </label>

        <ul id="ul">
            <li><a href="../home/home.php">HOME</a></li>
            <li><a href="../search/search.php">SEARCH</a></li>
            <li><a href="./about.php">ABOUT</a></li>
        </ul>
    </nav>
    <!------------------------------------------------------Header----------------------------------------------------->

    <!------------------------------------------------------About----------------------------------------------------->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Xin chào!</div>
                <div class="text-2">Thế Giới Động Vật</div>
                <div class="text-3">Đây là về website loài <span class="typing"></span></div>
            </div>
        </div>
    </section>

    <div class="full-img" id="fullImgBox">
        <img src="images/1.JPG" id="fullImg">
        <span onclick="closeFullImg()">X</span>
    </div>
    <div class="img-gallery">
        <img src="images/1.JPG" onclick="openFullImg(this.src)">
        <img src="images/2.JPG" onclick="openFullImg(this.src)">
        <img src="images/3.JPG" onclick="openFullImg(this.src)">
        <img src="images/4.JPG" onclick="openFullImg(this.src)">
        <img src="images/5.JPG" onclick="openFullImg(this.src)">
        <img src="images/6.JPG" onclick="openFullImg(this.src)">
        <img src="images/7.JPG" onclick="openFullImg(this.src)">
        <img src="images/8.JPG" onclick="openFullImg(this.src)">
    </div>

    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Giới thiệu</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/teamwork.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Chúng tôi bao gồm: <span class="typing2"></span></div>
                    <p> Chúng tôi là những kẻ mê mẩn và có tình cảm đặc biệt với các con vật và tin rằng trong thế giới này, động vật cũng giống như con người, chúng có thể giao
                        tiếp, có suy nghĩ, biết bày tỏ cảm xúc và đặc biệt là có tình cảm.
                        Xuất thân làm trong lĩnh vực kỹ thuật và truyền thông, là những người đầu tiên đưa
                        ra ý tưởng về dự án bảo vệ động vật, dành cả thanh xuân để tìm kiếm những mảnh ghép sáng tối về
                        cuộc sống của những loài động vật quen thuộc bên cạnh chúng ta.
                        Những năm đầu Đại học, khi chúng tôi còn là những cậu sinh viên, lần đầu tiên được nghe câu
                        chuyện nhận nuôi chú chó con của bạn Danh Chí Bảo.
                        Chúng tôi sung sướng đến rung người với tấm lòng nhân hậu của bạn. Xuất phát từ sự chứa đựng
                        tình cảm vô bờ cho những loài động vật độc đáo trên hành tinh này.
                        Chúng tôi đã nuôi y chí trong mình khát khao cháy bỏng, tìm hiểu và khám phá những sinh vật đặc
                        biệt mà tạo hóa đã ban tặng cho Trái Đất từ hàng trăm triệu năm trước.
                        Tìm cách tiếp cận những loài động vật khác lạ theo cách đặc biệt nhất, theo dõi hoạt động, hành
                        vi và tìm hiểu tại sao chúng có thể sinh sống, tạo thành quần thể sinh vật.
                        Từ các loài khủng long to lớn tới các động vật nguyên sinh nhỏ bé, chúng tôi đã sưu tầm cho mình
                        nhiều tài liệu quí giá.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Nội dung</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fad fa-snake"></i>
                        <div class="text">Bò Sát</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-frog"></i>
                        <div class="text">Lưỡng Cư</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-otter"></i>
                        <div class="text">Khác</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Thế giới động vật</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Sự ra đời của Website</div>
                    <p>
                        Trong một lần tham gia diễn đàn về các loài động vật, chúng tôi đã chạm mặt nhau tại một Topic
                        (Chủ đề) về động vật, tranh cãi nổ ra khi không ai nhường ai.
                        Nhưng với kiến thức chuyên sâu của mình, bạn Danh Chí Bảo đã dành chiến thắng, chúng tôi liền
                        chủ động kết bạn và mọi câu chuyện xoay quanh thế giới động vật.
                        Sau đó, chúng tôi trở thành tri kỉ.
                        Ước mơ lớn nhất của chúng tôi là có một công viên bảo tồn với đa dạng các loài động vật và vô
                        tình ước mơ đấy cũng là của Poo, chúng tôi đắn đo, bày tỏ quan ngại rất nhiều.
                        Cuối cùng, chúng tôu đã cùng đưa ra quyết định táo bạo, dành dụm một số tiền để tới nhiều vùng
                        đất khám phá muôn loài.
                        Sau nhiều tháng lặn lội tới khắp vùng, khu bảo tồn, gặp gỡ nhiều nhà sinh vật học và người có
                        cùng đam mê,
                        chúng tôi trở về Việt Nam và cùng đưa đi tới thống nhất lập ra dự án Website để chia sẻ mọi hiểu
                        biết, kiến thức về động vật từ những điều khám phá được,
                        đối tượng của chúng tôi là phi độ tuổi, có niềm đam mê với các loài động vật, tìm hiểu chúng và
                        mục đích cuối cùng là bảo vệ chúng khỏi nguy cơ tuyệt chủng.
                        Ước mơ về một Khu bảo tồn của riêng mình còn xa nhưng những tâm huyết dồn vào Website chúng tôi
                        tin rằng một cộng đồng lớn cùng chung tay, chúng ta sẽ làm được!
                    </p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>Bò sát</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Lưỡng cư</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Thành viên</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/avt1.png" alt="">
                        <div class="text">Hà Hoàng Khang</div>
                        <p>B1805768 (Trưởng nhóm)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/avt2.png" alt="">
                        <div class="text">Trần Lê Hoàng Tú</div>
                        <p>B1805831 (Phó nhóm)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/avt3.png" alt="">
                        <div class="text">Kim Thái Phong</div>
                        <p>B1805803 (Ủy viên)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/avt4.png" alt="">
                        <div class="text">Danh Chí Bảo</div>
                        <p>B1805844 (Ủy viên)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Liên hệ</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Thông tin nhóm</div>
                    <p>Bạn có thể tìm chúng tôi ở đâu?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Tên</div>
                                <div class="sub-title">Trà ếch</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Địa chỉ</div>
                                <div class="sub-title">3B/1 - Đường 3/2 - Khu vực Red Flag - Phường Peace - Quận Tea Frog - TP Tea Owl</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">concucon@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Ủng hộ chúng tôi</div>
                    <p>Bạn có thể ủng hộ chúng tôi ở đâu?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fab fa-cc-diners-club"></i>
                            <div class="info">
                                <div class="head">Momo</div>
                                <div class="sub-title">0345612389</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fab fa-cc-visa"></i>
                            <div class="info">
                                <div class="head">Sacombank</div>
                                <div class="sub-title">070103383739 - KIM THAI PHONG</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fab fa-cc-amazon-pay"></i>
                            <div class="info">
                                <div class="head">Agribank</div>
                                <div class="sub-title">001003005006 - KIM THAI PHONG</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------About----------------------------------------------------->

    <!------------------------------------------------------Footer----------------------------------------------------->
    <div class="footer">
        <div class="row">
            <div class="slogan">
                <div class="logo-img">
                    <img src="../image/LOGO.png" alt="">
                </div>
            </div>
            <div class="footer-icon">
                <div class="footer-icon-item">
                    <ion-icon name="logo-facebook"></ion-icon>
                    Facebook &nbsp
                </div>
                <div class="footer-icon-item">
                    <ion-icon name="logo-twitter"></ion-icon>
                    Twitter &nbsp
                </div>
                <div class="footer-icon-item">
                    <ion-icon name="logo-youtube"></ion-icon>
                    Youtube &nbsp
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2021 - Hack1nCradle</p>
    </div>
    <!------------------------------------------------------Footer----------------------------------------------------->

    <!------------------------------------------------------Script----------------------------------------------------->
    <script>
        // Hinh anh nho phong ra to
        var fullImgBox = document.getElementById("fullImgBox");
        var fullImg = document.getElementById("fullImg");

        function openFullImg(pic) {
            fullImgBox.style.display = "flex";
            fullImg.src = pic;
        }

        function closeFullImg() {
            fullImgBox.style.display = "none";

        }

        $(document).ready(function() {
            $(window).scroll(function() {
                if (this.scrollY > 500) {
                    $('.scroll-up-btn').addClass("show");
                } else {
                    $('.scroll-up-btn').removeClass("show");
                }
            });

            //truot len top
            $('.scroll-up-btn').click(function() {
                $('html').animate({
                    scrollTop: 0
                });
            });

            //hieu ung danh chu
            var typed = new Typed(".typing", {
                strings: ["Lưỡng Cư", "Bò Sát"],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true
            });

            var typed = new Typed(".typing2", {
                strings: ["Hà Hoàng Khang", "Trần Lê Hoàng Tú", "Kim Thái Phong", "Danh Chí Bảo"],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true
            });

            //owl carousel 
            $('.carousel').owlCarousel({
                margin: 20,
                loop: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false
                    }
                }
            })
        });
    </script>
    <!------------------------------------------------------Script----------------------------------------------------->

</body>

</html>