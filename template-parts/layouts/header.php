<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Evo Market - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    <script src="assets/placeholderTypewriter.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<div class="header">
    <!--top-->
    <div class="header__top uk-visible@m">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <a href="tel:19006750" class="uk-navbar-item header__top__hotline">1900 6750</a>
                </div>

                <div class="uk-navbar-right">
                    <div class="uk-navbar-item"><a href="#" class="header__top__navLink uk-border-pill">Hướng dẫn mua hàng</a></div>
                    <div class="uk-navbar-item"><a href="#" class="header__top__navLink uk-border-pill">Hướng dẫn thanh toán</a></div>
                    <div class="uk-navbar-item"><a href="#" class="header__top__navLink uk-border-pill">FAQ</a></div>
                    <div class="uk-navbar-item"><a href="#" class="header__top__navLink uk-border-pill">Hệ thống cửa hàng</a></div>
                </div>

            </nav>
        </div>
    </div>
    <!--/top-->

    <!--uk-stick-->
    <div uk-sticky>
        <!--center-->
        <div class="header__center">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                    <div class="uk-navbar-left">
                        <a href="." class="uk-navbar-item uk-logo" uk-toggle="cls: uk-padding-remove-left; mode: media; media: @l"><img src="images/logo.png" alt=""></a>
                    </div>

                    <div class="uk-navbar-right uk-flex-1">
                        <div class="uk-navbar-item uk-flex-1 uk-visible@m">
                            <form class="header__center__form uk-position-relative uk-width-1-1">
                                <input id="search" class="uk-input header__center__form__inputSearch uk-border-pill" type="text" placeholder="">
                                <button type="button" class="header__center__form__btn uk-button uk-button-default uk-position-center-right">
                                    <svg viewBox="0 0 451 451" style="width:20px;">
                                        <g fill="#000">
                                            <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3
                                                         s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4
                                                         C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3
                                                         s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="uk-navbar-item uk-visible@m">
                            <a href="" class="header__center__nav1 header__center__nav1--account">Tài khoản</a>
                            <div class="header__center__dropdown header__center__dropdown--acc" uk-dropdown>
                                <ul class="uk-nav">
                                    <li class="uk-active"><a href="">Đăng nhập</a></li>
                                    <li><a href="">Đăng ký</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-navbar-item uk-visible@m">
                            <a href="" class="header__center__nav1 header__center__nav1--wishList" data-count="0">Yêu thích</a>
                            <div class="header__center__dropdown header__center__dropdown--wishList" uk-dropdown>
                                <div class="header__center__dropdown--wishList__message">Những sản phẩm yêu thích (0)</div>
                                <div class="header__center__dropdown--wishList__description">
                                    <div class="header__center__dropdown--wishList__description__empty-icon">
                                        <img src="images/valentines-heart.svg" alt="">
                                    </div>
                                    <div class="header__center__dropdown--wishList__empty-text">
                                        <h3 class="uk-h3">Sản phẩm nào của chúng tôi bạn mong muốn sở hữu nhất?</h3>
                                        <p>Hãy thêm vào danh sách sản phẩm yêu thích ngay nhé!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-item uk-visible@m" uk-toggle="cls: uk-padding-remove-right; mode: media; media: @l">
                            <a href="cart.php" class="header__center__cart" data-count="0">
                                <svg viewBox="0 0 100 100" data-radium="true" style="width: 25px;"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-286.000000, -515.000000)" fill="#fff"><path d="M374.302082,541.184324 C374.044039,539.461671 372.581799,538.255814 370.861517,538.255814 L351.078273,538.255814 L351.078273,530.159345 C351.078273,521.804479 344.283158,515 335.93979,515 C327.596422,515 320.801307,521.804479 320.801307,530.159345 L320.801307,538.255814 L301.018063,538.255814 C299.297781,538.255814 297.835541,539.461671 297.577499,541.184324 L286.051608,610.951766 C285.87958,611.985357 286.137623,613.018949 286.825735,613.794143 C287.513848,614.569337 288.460003,615 289.492173,615 L382.387408,615 L382.473422,615 C384.451746,615 386,613.449612 386,611.468562 C386,611.037898 385.913986,610.693368 385.827972,610.348837 L374.302082,541.184324 L374.302082,541.184324 Z M327.854464,530.159345 C327.854464,525.680448 331.467057,522.062877 335.93979,522.062877 C340.412524,522.062877 344.025116,525.680448 344.025116,530.159345 L344.025116,538.255814 L327.854464,538.255814 L327.854464,530.159345 L327.854464,530.159345 Z M293.62085,608.023256 L304.028557,545.318691 L320.801307,545.318691 L320.801307,565.043066 C320.801307,567.024117 322.349561,568.574505 324.327886,568.574505 C326.30621,568.574505 327.854464,567.024117 327.854464,565.043066 L327.854464,545.318691 L344.025116,545.318691 L344.025116,565.043066 C344.025116,567.024117 345.57337,568.574505 347.551694,568.574505 C349.530019,568.574505 351.078273,567.024117 351.078273,565.043066 L351.078273,545.318691 L367.851024,545.318691 L378.25873,608.023256 L293.62085,608.023256 L293.62085,608.023256 Z"></path></g></g></svg>
                            </a>
                            <div class="uk-text-center header__center__dropdown header__center__dropdown--cart" uk-dropdown>
                                <div>
                                    <img class="header__center__dropdown--cart__emptyImg" src="images/shopping-cart-empty.svg" alt="">
                                </div>
                                <p class="header__center__dropdown--cart__txtempty">Không có sản phẩm nào trong giỏ hàng.</p>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
        <!--/center-->

        <!--bottom-->
        <div class="header__bottom uk-visible@m">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left uk-flex-1">

                        <ul class="uk-navbar-nav uk-flex-1 uk-child-width-expand">
                            <li class="uk-active"><a href=".">TRANG CHỦ</a></li>
                            <li><a href="#">GIỚI THIỆU</a></li>
                            <li>
                                <a href="catalog.php">SẢN PHẨM</a>
                                <div class="uk-navbar-dropdown header__bottom__megaDropdown" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;animation: uk-animation-slide-bottom-small; duration: 300">
                                    <div class="uk-grid-collapse uk-grid-match" uk-grid>
                                        <div class="uk-width-1-4">
                                            <ul class="uk-nav col_menu_cap1 uk-position-relative">
                                                <?php
                                                $dataMenu = array(
                                                    array(
                                                        'txt' => 'Đồ điện tử và công nghệ',
                                                        'sub' => true,
                                                    ),
                                                    array(
                                                        'txt' => 'Đồng hồ hàng hiệu',
                                                        'sub' => true,
                                                    ),
                                                    array(
                                                        'txt' => 'Thời trang nữ',
                                                        'sub' => true,
                                                    ),
                                                    array(
                                                        'txt' => 'Thời trang nam',
                                                        'sub' => true,
                                                    ),
                                                    array(
                                                        'txt' => 'Mẹ, Bé và Đồ chơi',
                                                        'sub' => true,
                                                    ),

                                                    array(
                                                        'txt' => 'Làm đẹp',
                                                        'sub' => true,
                                                    ),
                                                    array(
                                                        'txt' => 'Thế giới nước hoa',
                                                        'sub' => true,
                                                    ),
                                                    array(
                                                        'txt' => 'Đồ chơi và Games',
                                                        'sub' => true,
                                                    ),
                                                    array(
                                                        'txt' => 'Phụ tùng, phụ kiện xe hơi',
                                                        'sub' => true,
                                                    ),
                                                    array(
                                                        'txt' => 'Thể thao, du lịch và dã ngoại',
                                                        'sub' => true,
                                                    ),
                                                );
                                                foreach ($dataMenu as $k=>$v): ?>
                                                <li class="sub_item_menu header__bottom__megaDropdown__sub_item_menu <?= ($k==0)?'active':'' ?>">
                                                    <a href=""><span><?= $v['txt'] ?></span></a>
                                                    <?php if ($v['sub']): ?>
                                                    <div class="conten_hover_submenu header__bottom__megaDropdown__conten_hover_submenu">
                                                        <div class="uk-grid-small" uk-grid>
                                                            <div class="uk-width-expand">
                                                                <div class="uk-child-width-1-3@m uk-grid-20 grid1" uk-grid>
                                                                    <div>
                                                                        <h3 class="header__bottom__megaDropdown__conten_hover_submenu__title"><a href="">Máy tính và phụ kiện</a></h3>
                                                                        <ul class="uk-nav">
                                                                            <li><a href="">Laptop, Tablet</a></li>
                                                                            <li><a href="">Màn hình</a></li>
                                                                            <li><a href="">Webcams</a></li>
                                                                            <li><a href="">Phụ Kiện, Linh kiện</a></li>
                                                                            <li><a href="">Thiết bị mạng</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <h3 class="header__bottom__megaDropdown__conten_hover_submenu__title"><a href="">Điện thoại và phụ kiện</a></h3>
                                                                        <ul class="uk-nav">
                                                                            <li><a href="">Điện thoại</a></li>
                                                                            <li><a href="">Pin sạc dự phòng, Cáp và Bộ sạc</a></li>
                                                                            <li><a href="">Bao da, Ốp lưng và Dán màn hình</a></li>
                                                                            <li><a href="">Gậy chụp hình</a></li>
                                                                            <li><a href="">Linh kiện điện thoại</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <h3 class="header__bottom__megaDropdown__conten_hover_submenu__title"><a href="">Thiết bị kỹ thuật số</a></h3>
                                                                        <ul class="uk-nav">
                                                                            <li><a href="">Máy ảnh, Quay phim và Camera hành trình</a></li>
                                                                            <li><a href="">Loa thông minh</a></li>
                                                                            <li><a href="">Thiết bị Game</a></li>
                                                                            <li><a href="">Kính thực tế ảo</a></li>
                                                                            <li><a href="">PlayStation 4</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <h3 class="header__bottom__megaDropdown__conten_hover_submenu__title"><a href="">Điện tử cho văn phòng</a></h3>
                                                                        <ul class="uk-nav">
                                                                            <li><a href="">Máy in</a></li>
                                                                            <li><a href="">Máy chiếu</a></li>
                                                                            <li><a href="">Máy hủy tài liệu</a></li>
                                                                            <li><a href="">Máy chấm công</a></li>
                                                                            <li><a href="">Phụ kiện máy in</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <h3 class="header__bottom__megaDropdown__conten_hover_submenu__title"><a href="">Tai nghe</a></h3>
                                                                        <ul class="uk-nav">
                                                                            <li><a href="">Tai nghe chụp tai (Over-Ear)</a></li>
                                                                            <li><a href="">Tai nghe nhét tai (In-Ear và Earbud)</a></li>
                                                                            <li><a href="">Tai nghe Game</a></li>
                                                                            <li><a href="">Tai nghe thể thao</a></li>
                                                                            <li><a href="">Phụ kiện cho tai nghe</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <h3 class="header__bottom__megaDropdown__conten_hover_submenu__title"><a href="">Điện tử gia đình</a></h3>
                                                                        <ul class="uk-nav">
                                                                            <li><a href="">Tivi</a></li>
                                                                            <li><a href="">Âm thanh giải trí tại gia</a></li>
                                                                            <li><a href="">Nhà bếp hiện đại</a></li>
                                                                            <li><a href="">Hệ thống chiếu sáng thông minh</a></li>
                                                                            <li><a href="">Thiết bị chống trộm</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <h3 class="header__bottom__megaDropdown__conten_hover_submenu__title"><a href="">GPS & Định vị</a></h3>
                                                                        <ul class="uk-nav">
                                                                            <li><a href="">Định vị GPS</a></li>
                                                                            <li><a href="">Định vị GPS cầm tay</a></li>
                                                                            <li><a href="">Định vị GPS cho xe</a></li>
                                                                            <li><a href="">Phụ kiện GPS</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="uk-width-1-4">
                                                                <img src="https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/mega-1-image.jpg?1629431129709"
                                                                     alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">SĂN DEAL</a></li>
                            <li><a href="#">HÀNG LIKE NEW</a></li>
                            <li>
                                <a href="#">TIN TỨC</a>
                                <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove uk-dropdown uk-dropdown-bottom-left" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li>
                                            <a href="#" aria-expanded="false" class="">Tư vấn chọn mua</a>
                                            <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown uk-dropdown-right-top" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                                <li><a href="#">Mua hàng từ Amazon</a></li>
                                                <li><a href="#">Mua hàng từ Ebay</a></li>
                                                <li><a href="#">Mua hàng từ Walmart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Tin khuyến mãi</a></li>
                                        <li><a href="#">Hỏi đáp</a></li>
                                        <li><a href="#">Mẹo vặt</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">LIÊN HỆ</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
        <!--/bottom-->
    </div>
    <!--/uk-stick-->
</div>