<?php
require_once('../db/DBHelper.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $result = getSingleSpecies($id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffaPoo - Chi tiết loài </title>
    <link rel="icon" href="../logo/logo.ico">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="./details.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <title>Details</title>
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
            <img height="30px" width="30px" src="../image/icon.png" />
        </label>

        <ul id="ul">
            <li><a href="../home/home.php">HOME</a></li>
            <li><a href="../search/search.php">SEARCH</a></li>
            <li><a href="../about/about.php">ABOUT</a></li>
        </ul>
    </nav>
    <!------------------------------------------------------Header----------------------------------------------------->

    <!------------------------------------------------------Details----------------------------------------------------->

    <section class="course">
        <h1>Tên Loài</h1>
        <p></p>
        <div class="row">
            <div class="course-col">
                <h3>TÊN KHOA HỌC</h3>
                <?php echo '<p>' . ($result['ScienceName']) . '</p>'; ?>
            </div>
            <div class="course-col">
                <h3>TÊN TIẾNG VIỆT</h3>
                <?php echo '<p>' . ($result['VietnameseName']) . '</p>'; ?>
            </div>
            <div class="course-col">
                <h3>TÊN ĐỊA PHƯƠNG</h3>
                <?php echo '<p>' . ($result['LocalName']) . '</p>'; ?>
            </div>
        </div>
    </section>

    <section class="campus">
        <h1>Bậc Phân Loại</h1>
        <p></p>
        <div class="row">
            <div class="campus-col">
                <?php echo '<p>' . ($result['KINGDOM_NAME']) . '</p>'; ?>
                <div class="layer">
                    <h3>GIỚI</h3>
                </div>
            </div>
            <div class="campus-col">
                <?php echo '<p>' . ($result['PHYLUM_NAME']) . '</p>'; ?>
                <div class="layer">
                    <h3>NGÀNH</h3>
                </div>
            </div>
            <div class="campus-col">
                <?php echo '<p>' . ($result['CLASS_NAME']) . '</p>'; ?>
                <div class="layer">
                    <h3>LỚP</h3>
                </div>
            </div>
            <div class="campus-col">
                <?php echo '<p>' . ($result['ORDERS_NAME']) . '</p>'; ?>
                <div class="layer">
                    <h3>BỘ</h3>
                </div>
            </div>
            <div class="campus-col">
                <?php echo '<p>' . ($result['FAMILY_NAME']) . '</p>'; ?>
                <div class="layer">
                    <h3>HỌ</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="img">
        <h1>Hình Ảnh Liên Quan</h1>
        <p></p>
        <div class="row">
            <div class="container">
                <div class="img-list">
                    <?php
                    if (isset($result)) {
                        if ($result['Image1'] != '') echo '<img class="active" src="https://drive.google.com/uc?export=view&id=' . ($result['Image1']) . '" alt="hinh1">';
                        if ($result['Image2'] != '') echo '<img src="https://drive.google.com/uc?export=view&id=' . ($result['Image2']) . '" alt="hinh2">';
                        if ($result['Image3'] != '') echo '<img src="https://drive.google.com/uc?export=view&id=' . ($result['Image3']) . '" alt="hinh3">';
                        if ($result['Image4'] != '') echo '<img src="https://drive.google.com/uc?export=view&id=' . ($result['Image4']) . '" alt="hinh4">';
                        if ($result['Image5'] != '') echo '<img src="https://drive.google.com/uc?export=view&id=' . ($result['Image5']) . '" alt="hinh5">';
                    }
                    ?>
                </div>
                <div class="main-img">
                    <?php if ($result['Image1'] != '') echo '<img src="https://drive.google.com/uc?export=view&id=' . ($result['Image1']) . '" alt="hinh1">'; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="facilities">
        <h1>Tình Trạng Bảo Tồn</h1>
        <p></p>
        <div class="row">
            <div class="facilities-col">
                <img src="./images/IUCN.png">
                <h3>Trình Trạng Bảo Tồn Theo IUCN</h3>
                <p>LC (Least concern)</p>
            </div>
            <div class="facilities-col">
                <img height=340px src="./images/4qASBQZCtY.webp">
                <h3>Tình Trạng Bảo Tồn Theo Sách Đỏ Việt Nam</h3>
                <p>Sắp nguy cấp</p>
            </div>
            <div class="facilities-col">
                <img src="./images/nghidinh.png">
                <h3>Tình Trạng Bảo Tồn Theo Nghị Định 32/2006/NĐCP</h3>
                <p>Không nằm trong danh mục bảo tồn</p>
            </div>
            <div class="facilities-col">
                <img src="./images/cites.png">
                <h3>Tình Trạng Bảo Tồn Theo CITES (40/2013/TT-BNNPTNT)</h3>
                <p>Không có trong danh mục</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h1>Mô Tả Đặc Điểm</h1>
        <p></p>
        <div class="row">
            <div class="testimonials-col">
                <img src="images/pngegg.png">
                <div>
                    <h3>Mô Tả Đặc Điểm Hình Thái</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <?php if (isset($result)) echo '<p>' . ($result['Morphological']) . '</p>' ?>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="images/pngegg (1).png">
                <div>
                    <h3>Mô Tả Đặc Điểm Sinh Thái</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <?php if (isset($result)) echo '<p>' . ($result['Ecological']) . '</p>' ?>
                </div>
            </div>
        </div>
    </section>

    <section class="toado">
        <h1>Vị Trí Xuất Hiện</h1>
        <p></p>
        <div class="row">
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-map-marked-alt"></i>
                    <div class="content">
                        <?php if (isset($result)) echo '<p>' . ($result['COORDINATES1']) . '</p>' ?>
                    </div>
                    <span class="year">Toạ Độ 1</span>
                </div>
                <div class="box">
                    <i class="fas fa-map-marked-alt"></i>
                    <div class="content">
                        <?php if (isset($result)) echo '<p>' . ($result['COORDINATES2']) . '</p>' ?>
                    </div>
                    <span class="year">Toạ Độ 2</span>
                </div>
                <div class="box">
                    <i class="fas fa-map-marked-alt"></i>
                    <div class="content">
                        <?php if (isset($result)) echo '<p>' . ($result['COORDINATES3']) . '</p>' ?>
                    </div>
                    <span class="year">Toạ Độ 3</span>
                </div>
                <div class="box">
                    <i class="fas fa-map-marked-alt"></i>
                    <div class="content">
                        <?php if (isset($result)) echo '<p>' . ($result['COORDINATES4']) . '</p>' ?>
                    </div>
                    <span class="year">Toạ Độ 4</span>
                </div>
                <div class="box">
                    <i class="fas fa-map-marked-alt"></i>
                    <div class="content">
                        <?php if (isset($result)) echo '<p>' . ($result['COORDINATES5']) . '</p>' ?>
                    </div>
                    <span class="year">Toạ Độ 5</span>
                </div>
            </div>

        </div>
    </section>

    <section class="mauvat">
        <h1>Mẫu Vật</h1>
        <p></p>
        <div class="row">
            <div class="mauvat-container">
                <div class="mauvat-box">
                    <div class="mauvat-image">
                        <img src="images/anhdaden.jpg">
                    </div>
                    <div class="mauvat-content">
                        <?php
                        if (isset($result)) {
                            echo '
                                <h3 class="mauvat-title">Người Thu Mẫu: ' . ($result['COLLECTOR']) . '</h3>
                                <span class="mauvat-post">Ngày Thu Mẫu: ' . ($result['COLLECTION_DATE']) . '</span>
                                <a href="#"><i class="fas fa-check-circle"></i> Tình Trạng Mẫu: ' . ($result['SPECMEN_CODITION']) . '</a><br>    
                                <a href="#"><i class="fas fa-cannabis"></i> Sinh Cảnh: ' . ($result['HABITAT']) . '</a><br>
                                <a href="#"><i class="fas fa-map-marker-alt"></i> Địa Điểm: ' . ($result['LOCATION']) . '</a>
                            ';
                        }
                        ?>
                    </div>
                    <div class="mauvat-share">
                        <a href="#" class="fad fa-snake"></a>
                        <a href="#" class="fas fa-frog"></a>
                        <a href="#" class="fas fa-otter"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="giatri">
        <h1>Giá Trị - Độ Phủ</h1>
        <p></p>
        <div class="row">
            <div class="giatri-col">
                <h3>Giá Trị Sử Dụng</h3>
                <?php if (isset($result)) echo '<p>' . ($result['GTSD']) . '</p>'; ?>
            </div>
            <div class="giatri-col">
                <h3>Phân Bố</h3>
                <?php if (isset($result)) echo '<p>' . ($result['DISTRIBUTION_NAME']) . '</p>'; ?>
            </div>
        </div>
    </section>

    <!------------------------------------------------------Details----------------------------------------------------->

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
        $(document).ready(function() {
            $('.img-list img').click(function() {
                $(this).addClass('active').siblings().removeClass('active');
                let src = $(this).attr('src');
                $('.main-img img').attr('src', src);
            });

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
        })
    </script>
    <!------------------------------------------------------Script----------------------------------------------------->
</body>

</html>