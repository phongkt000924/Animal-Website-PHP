<!DOCTYPE html>
<html>

<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <meta charset='utf-8'>
    <title>BuffaPoo - Trang chủ</title>
    <link rel="icon" href="../logo/logo.ico">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <!--navbar-->
    <nav class="navbar">
        <a class="logo" href="./home.php">
            <img src="../logo/LOGO_S.png" alt="">
        </a>
        

        <input type="checkbox" id="menu" />
        <label for="menu" class="menu">
            <img height="30px" width="30px" src="image/icon.png" /></img>
        </label>

        <ul id="ul">
            <li><a href="./home.php">HOME</a></li>
            <li><a href="../search/search.php">SEARCH</a></li>
            <li><a href="../about/about.php">ABOUT</a></li>
        </ul>
    </nav>


    <!--HOME-->
    <div class="home">
        <div class="home-background">
            <div class="intro">
                <p>TỪ ĐIỂN BUFFAPOO</p>
                <!--<p>10.000<sup>+</sup> SPECIES<p>
                    -->
            </div>
            <div class="search-form">
                <div>
                    <input id='xyz-search' type="text" name="search_value">
                    <input id='abc-search' type="button" name="search_button" value="SEARCH">
                </div>

                <script>
                    document.getElementById('abc-search').addEventListener('click',()=>{
                        window.location.href="../search/search.php?search="+document.getElementById('xyz-search').value;
                    })
                    document.getElementById('xyz-search').addEventListener('keypress', function (e) {
                        if (e.key === 'Enter') {
                            console.log("hello")
                            window.location.href="../search/search.php?search="+document.getElementById('xyz-search').value;
                        }
                    });

                </script>

            </div>
        </div>
        <div data-aos="zoom-in-up" class="home-content red">
            <img src="./image/dongvat2.jpg" />
            <div >
                <p class="home-content-title">Về BuffaPoo</p>
                <p class="home-content-text">Là trang từ điển online chứa thông tin về các loài vật trên toàn thế giới được
                    đống góp bởi mọi người. Hiện nay đã có hơn 1000 loài được cập nhật thông tin tại đây</p>
                <a href="../about/about.php" class="home-content-button">Xem thêm...</a>
            </div>
        </div>
        <div data-aos="zoom-in-up" class="home-content">
            <div>
                <p class="home-content-title">Về chúng tôi</p>
                <p class="home-content-text">Nhóm các sinh viên ngành phần mềm của trường Đại học Cần Thơ có chung tình yêu với thiên nhiên, muốn góp một chút công sức cho công cuộc bảo tồn các loài động vật ở ĐBSCL.</p>
                <a href="../about/about.php" class="home-content-button">Xem thêm...</a>
            </div>
            <img src="./image/dongvat3.jpg" />
        </div>

        <div class='thongke'>
            <div data-aos="fade-up" class="tk-title">
                Việt Nam hiện nay
            </div>
            <div data-aos="fade-right" class="tk-elem tk-1">
               <img src="./image/323319.png" width=70px height=70px> Khoảng <strong>51.400</strong> loài được xác định
            </div>
            <div data-aos="fade-left" class="tk-elem tk-2">
                Hơn <strong>1000</strong> loài cần được bảo tồn<img src="./image/323319.png" width=70px height=70px>
            </div>
            <div data-aos="fade-right" class="tk-elem tk-3">
            <img src="./image/323319.png" width=70px height=70px> Có <strong>33</strong> vườn quốc gia trên khắp cả nước
            </div>
            <div data-aos="fade-left" class="tk-elem tk-4">
                <strong>14</strong> khu bảo tồn dọc dải đất chữ S<img src="./image/323319.png" width=70px height=70px>
            </div>
            <div data-aos="fade-right" class="tk-elem tk-5">
            <img src="./image/323319.png" width=70px height=70px>tổng cộng <strong>9</strong> khu dự trữ sinh quyển
            </div>
        </div>
        
        <div class="lonxon">
            <div class="lx-title"> 
                    <a>BuffaPoo</a><br>Vì thiên nhiên Việt Nam tươi đẹp.
            </div>
            <img data-aos="fade-up-left" class="i-1" src="./image/ho.png" width=300px height=300px>
            <img data-aos="fade-up-right" class="i-2" src="./image/rua.png" width=310px height=310px>
            <img data-aos="fade-left" class="i-3" src="./image/tegiac.png" width=300px height=300px>
            <img data-aos="fade-up" class="i-4" src="./image/voc.png" width=200px height=200px>
            <img data-aos="fade-down-right" class="i-5" src="./image/voi.png" width=340px height=340px>
            <img data-aos="fade-up-right" class="i-6" src="./image/iucn.png" width=200px height=200px>
            <img data-aos="fade-down" class="i-7" src="./image/cites.png" width=300px height=150px>
            <img data-aos="fade-down" class="i-8" src="./image/vn.png" width=340px height=200px>
        </div>

        <div class="home-donate">
            <div class="home-donate-content">
                <p data-aos="flip-up">Bắt đầu khám phá ngay...</p>
                <div class="home-donate-button">
                    <a data-aos="flip-up" href="../search/search.php">Tra cứu</a>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER -->
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>