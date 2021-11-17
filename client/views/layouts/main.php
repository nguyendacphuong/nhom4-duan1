<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
    <?php include_once "./css/index.css"; ?>
</head>
<body>
    <div class="containner">
        <div class="header-top">
            <img src="imgheader/iconphone.png" alt="">
            <span>Hỗ Trợ Khách Hàng: 1900 8079</span>
        </div>
    </div>
    <div class="line"></div>
    <div class="containner">
        <!--HEADER START-->
        <header>
            <div class="header-main">
                <a href="/duan1-n4/frontend/index.html"><img src="./../quantriweb/image-qt/logo.png" alt="" class="logo"></a>
                <ul class="menuheader">
                    <li><a href="">áo</a></li>
                    <li><a href="">quần</a></li>
                    <li><a href="">phụ kiện</a></li>
                    <li><a href="">giá tốt</a></li>
                </ul>
                <form class="search">
                    <input  name="" placeholder="Bạn tìm gì....">
                </form>
                <div class="iconoperation">
                    <a href=""><img src="imgheader/iconperson.png" alt=""></a>
                    <a href=""><img src="imgheader/iconcart.png" alt=""></a>
                </div>
            </div>
        </header>
    </div>
    <div class="content">
        <div class="left">
            <h2>ĐĂNG NHẬP</h2>
            <span>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu<br> đãi tốt hơn!</span>
            <form>
                <div>
                    <label for="">Email*</label><br>
                    <input type="email" name="email">
                    <strong><?php echo isset($errot['email']) ? $errot['email'] : ' '; ?></strong>
                </div>
                <div>
                    <label for="">Mật khẩu*</label><br>
                    <input type="password" name="pass">
                    <strong> <?php echo isset($errot1['pass']) ? $errot1['pass'] : ''; ?></strong>
                   
                </div>
                <div class="forgotpass">
                    <a href="">Quên mật khẩu?</a>
                </div>
                <div>
                    <button class="login" name="dangnhap">ĐĂNG NHẬP</button><br>
                </div>
            </form>
            <?php 
            // hdlsad;áhdljshdkjsahda;shdkjsahdas
            // hdlsad;áhdljshdkjsahda;shdkjsahdas
            // hdlsad;áhdljshdkjsahda;shdkjsahdas
            ?>
            <a class="create" href="/duan1-n4/frontend/dangky.html?"><button class="createaccount">TẠO TÀI KHOẢN</button></a>
        </div>
        <div class="right">
            <img src="./imgbanner/bannerlogin.jpg" alt="">
        </div>
    </div>
    <div class="line"></div>
    <div class="containner">
        <!--FOOTER START-->
        <footer>
            <div class="footerlogo">
                <div>
                    <a href="/duan1-n4/frontend/index.html"><img src="./../quantriweb/image-qt/logo.png" alt=""></a>
                </div>
                <div>
                    <span>Hotline: 106461054016</span><br>
                    <span>giờ mở cửa: sdfsdfsdf</span>
                </div>
                <div class="address">
                    <span>Địa chỉ: ádkfjksdkfjsldfk</span>
                </div>
            </div>
            <ul class="help">
                <h3 class="help-title">Giới thiệu về PHTT</h3>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Hệ thống cửa hàng</a></li>
                <li><a href="">Liên hệ với PHTT</a></li>
                <li><a href="">Chính sách bảo mật</a></li>
            </ul>
            <ul class="help">
                <h3 class="help-title">Hỗ trợ khách hàng</h3>
                <li><a href="">Hỏi đáp</a></li>
                <li><a href="">Chính sách vận chuyển</a></li>
                <li><a href="">Hướng dẫn chọn kích cỡ</a></li>
                <li><a href="">Hướng dẫn thanh toán</a></li>
                <li><a href="">Quy định đổi hàng</a></li>
                <li><a href="">Hướng dẫn mua hàng</a></li>
            </ul>
            <div class="connect">
                <h3>KẾT NỐI</h3>
                <div class="icon">
                    <a href=""><img src="imgicon/facebool.png" alt=""></a>
                    <a href=""><img src="imgicon/insta.png" alt=""></a>
                    <a href=""><img src="imgicon/youtube.png" alt=""></a>
                </div>
                <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                <div class="icon">
                    <a href=""><img src="imgicon/icon jcb.jpg" alt=""></a>
                    <a href=""><img src="imgicon/icon vnpay.png" alt=""></a>
                    <a href=""><img src="imgicon/icon-visa.png" alt=""></a>
                    <a href=""><img src="imgicon/icon mastercard.jpg" alt=""></a>
                </div>
            </div>
        </footer>
        <!--FOOTER END-->
    </div>
</body>
</html>