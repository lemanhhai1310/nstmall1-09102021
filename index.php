<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-small home__content">
    <div class="uk-container uk-padding-remove">
        <!--Đồng hồ-->
        <div class="uk-card uk-card-default home__content__card">
            <div class="uk-card-header uk-padding-small">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="uk-h2 uk-margin-remove home__content__card__title">Đồng hồ</h2>
                    </div>
                    <div class="uk-width-auto">

                    </div>
                </div>
            </div>
            <div class="uk-card-body uk-padding-small">

            </div>
        </div>
        <!--/Đồng hồ-->

        <!--Tìm kiếm phổ biến-->
        <div class="uk-card uk-card-default home__content__card">
            <div class="uk-card-header uk-padding-small">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="uk-h2 uk-margin-remove home__content__card__title">Tìm kiếm phổ biến</h2>
                    </div>
                    <div class="uk-width-auto">

                    </div>
                </div>
            </div>
            <div class="uk-card-body uk-padding-remove">
                <div uk-slider>

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-collapse uk-grid-match" uk-grid>
                            
                            <li>
                                <div class="uk-child-width-1-1 uk-grid-collapse uk-grid-match" uk-grid>
                                    <div>

                                    </div>
                                    <div>

                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
            </div>
        </div>
        <!--Tìm kiếm phổ biến-->

        <!--Tư vấn mua sản phẩm-->
        <div class="uk-card uk-card-default home__content__card home__content__card--news">
            <div class="uk-card-header uk-padding-small">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="uk-h2 uk-margin-remove home__content__card__title"><a href="" class="uk-link-toggle">Tư vấn mua sản phẩm</a></h2>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="uk-link-toggle home__content__card__linkAll">Xem tất cả</a>
                    </div>
                </div>
            </div>
            <div class="uk-card-body uk-padding-small">
                <div class="uk-child-width-1-4@m uk-grid-15" uk-grid>
                    <?php
                    $dataNews = array(
                        array(
                            'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/articles/mmmmmmmmmmmmmmmmmmmmmmmmmmmmm-600x400-1.jpg?v=1573437996887',
                            'title' => 'Xiaomi ngầm xác nhận Mi MIX 4, Mi 10 sẽ sử dụng màn hình có tần số quét cao',
                            'desc' => ' Tuần vừa rồi, Xiaomi đã ra mắt chính thức Mi CC9 Pro (tên quốc tế: Mi Note 10) với camera được đánh giá là...',
                        ),
                        array(
                            'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/articles/2006001.jpg?v=1573437924130',
                            'title' => 'Xiaomi Mi Watch có thời lượng dùng pin thực tế ấn tượng hơn cả quảng cáo',
                            'desc' => ' Gần đây, Xiaomi đã phát hành chiếc smartwatch đầu tiên của mình. Xiaomi Mi Watch có màn hình vuông AMOLED ...',
                        ),
                        array(
                            'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/articles/zalo.jpg?v=1573437833800',
                            'title' => 'Cách kích hoạt chế độ tối (Dark Mode) siêu đẹp cho Zalo trên smartphone',
                            'desc' => 'Zalo là ứng dụng nhắn tin OTT hàng đầu tại Việt Nam với nhiều tính năng tích hợp tiện lợi. Và nếu bạn là n...',
                        ),
                        array(
                            'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/articles/1967033.jpg?v=1573437709753',
                            'title' => 'Mac Pro xuất hiện trong phòng thu của DJ Calvin Harris mặc dù chưa được phát hành',
                            'desc' => 'Apple tại sự kiện WWDC 2019 đã giới thiệu Mac Pro mới, một phiên bản PC cao cấp nhắm đến người dùng có xu ...',
                        ),
                    );
                    foreach ($dataNews as $k=>$v): ?>
                    <div>
                        <div class="uk-cover-container uk-border-rounded uk-margin-small-bottom">
                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                            <canvas width="536" height="356"></canvas>
                        </div>
                        <div class="home__content__card--news__item__margin10s">
                            <h4 class="uk-h4 home__content__card--news__item__title"><a href=""><?= $v['title'] ?></a></h4>
                            <p class="home__content__card--news__item__desc"><?= $v['desc'] ?></p>
                            <div><a href="" class="home__content__card--news__item__readMore uk-button uk-button-small uk-border-pill uk-button-default">Đọc tiếp</a></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!--/Tư vấn mua sản phẩm-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>
