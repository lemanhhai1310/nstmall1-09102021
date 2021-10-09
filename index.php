<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 300; max-height: 600">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/slider_1.jpeg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/photo.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<div class="home__catalog uk-section-xsmall">
    <div class="uk-container uk-padding-remove">
        <div class="uk-child-width-expand@m uk-grid-collapse uk-grid-match uk-flex-nowrap uk-overflow-auto" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/smartphone-call.png',
                    'txt' => 'Đồ điện tử và công nghệ',
                ),
                array(
                    'src' => 'images/watch.png',
                    'txt' => 'Đồng hồ hàng hiệu',
                ),
                array(
                    'src' => 'images/dress.png',
                    'txt' => 'Thời trang nữ',
                ),
                array(
                    'src' => 'images/cotton-polo-shirt.png',
                    'txt' => 'Thời trang nam',
                ),
                array(
                    'src' => 'images/car.png',
                    'txt' => 'Mẹ, Bé và Đồ chơi',
                ),
                array(
                    'src' => 'images/cream.png',
                    'txt' => 'Làm đẹp',
                ),
                array(
                    'src' => 'images/perfume.png',
                    'txt' => 'Thế giới nước hoa',
                ),
                array(
                    'src' => 'images/console.png',
                    'txt' => 'Đồ chơi và Games',
                ),
                array(
                    'src' => 'images/hubcap.png',
                    'txt' => 'Phụ tùng, phụ kiện xe hơi',
                ),
                array(
                    'src' => 'images/camp.png',
                    'txt' => 'Thể thao, du lịch và dã ngoại',
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div>
                <a href="" class="home__catalog__item uk-link-toggle">
                    <div>
                        <div class="uk-cover-container uk-border-circle uk-display-inline-block home__catalog__item__img">
                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                <img src="<?= $v['src'] ?>" alt="">
                            </div>
                            <canvas width="56" height="56"></canvas>
                        </div>
                    </div>
                    <div class="home__catalog__item__title"><?= $v['txt'] ?></div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
$dataProduct = array(
    array(
        'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/products/btclassic1024x10242x.jpg?v=1573305669237',
        'title' => 'Doxa D201RSV – Nam – Kính Sapphire – Quartz (Pin) – Dây Kim Loại',
        'price' => '2.199.000₫',
        'price-old' => '',
        'sale' => false,
    ),
    array(
        'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/products/dfearless1024x10242x.jpg?v=1573305667913',
        'title' => 'Casio MTP-V004GL-9AUDF – Nam – Quartz (Pin) – Dây Da',
        'price' => '2.199.000₫',
        'price-old' => '3.500.000₫',
        'sale' => true,
    ),
    array(
        'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/products/btcalm1024x10242x.jpg?v=1573305666657',
        'title' => 'Doxa D201RIY – Nam – Kính Sapphire – Quartz (Pin) – Dây Da',
        'price' => '2.199.000₫',
        'price-old' => '2.500.000₫',
        'sale' => true,
    ),

    array(
        'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/products/drobust1024x10242x.jpg?v=1573305665250',
        'title' => 'Doxa D216SWH – Nam – Kính Sapphire – Automatic (Tự Động) – Dây Da',
        'price' => '2.199.000₫',
        'price-old' => '3.200.000₫',
        'sale' => true,
    ),
    array(
        'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/products/btrefined1024x10242x.jpg?v=1573305663893',
        'title' => 'Doxa D157KWH – Nam – Kính Sapphire – Quartz (Pin) – Dây Da',
        'price' => '2.199.000₫',
        'price-old' => '2.300.000₫',
        'sale' => true,
    ),
    array(
        'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/products/vdpotent1024x10242x.jpg?v=1573305662923',
        'title' => 'Longines L4.759.4.12.2 – Nam – Kính Sapphire – Quartz (Pin) – Dây Da',
        'price' => '2.199.000₫',
        'price-old' => '3.450.000₫',
        'sale' => true,
    ),
    array(
        'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/products/vdsharp1024x10242x.jpg?v=1573305661393',
        'title' => 'Tissot T109.210.33.031.00 – Nữ – Kính Sapphire – Quartz (Pin) – Dây Kim Loại',
        'price' => '2.199.000₫',
        'price-old' => '2.800.000₫',
        'sale' => true,
    ),
    array(
        'src' => 'https://bizweb.dktcdn.net/thumb/large/100/371/004/products/donghomvmtblacklinkmaster.jpg?v=1573305657020',
        'title' => 'Rotary GB90141/06 – Nam – Kính Sapphire – Quartz (Pin) – Dây Kim Loại',
        'price' => '2.199.000₫',
        'price-old' => '3.900.000₫',
        'sale' => true,
    ),
);
?>
<div class="uk-section-small home__content">
    <div class="uk-container uk-padding-remove">
        <!--Săn Deal mỗi ngày-->
        <div class="uk-card home__content__card--deal">
            <div class="uk-card-header">
                <a href="" class="uk-link-toggle">Săn Deal mỗi ngày</a>
            </div>
            <div class="uk-card-body uk-padding-remove">
                <div uk-slider>

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-collapse uk-grid-match" uk-grid>
                                <?php foreach ($dataProduct as $k=>$v): ?>
                                    <?php if ($k<=4): ?>
                                        <li>
                                            <div class="home__content__card--product__item">
                                                <a href="" class="home__content__card--product__item__thumbnail"><img class="uk-responsive-width" src="<?= $v['src'] ?>" alt=""></a>
                                                <h5 class="uk-h5 home__content__card--product__item__name"><a href="" class="uk-link-toggle"><?= $v['title'] ?></a></h5>
                                                <div class="uk-child-width-auto uk-grid-5" uk-grid>
                                                    <div>
                                                        <span class="home__content__card--product__item__price--new"><?= $v['price'] ?></span>
                                                    </div>
                                                    <?php if ($v['price-old'] != ''): ?>
                                                        <div>
                                                            <del class="home__content__card--product__item__price--old"><?= $v['price-old'] ?></del>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if ($v['sale']): ?>
                                                        <div>
                                                            <span class="uk-badge home__content__card--product__item__price--sale">-<?= rand(3,49) ?>%</span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="home__content__card--product__item__bottom-expand">
                                                    <div class="uk-child-width-auto uk-grid-5 uk-flex-center uk-flex-middle" uk-grid>
                                                        <div class="uk-width-expand">
                                                            <button type="button" class="home__content__card--product__item__bottom-expand__btn-add_to_cart uk-button uk-button-secondary">
                                                                <div>Mua ngay</div>
                                                            </button>
                                                        </div>
                                                        <div class="uk-width-auto">
                                                            <button type="button" class="home__content__card--product__item__bottom-expand__btn-favorites uk-button uk-button-default">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 51.997 51.997" style="enable-background:new 0 0 51.997 51.997;" xml:space="preserve"><path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z"></path></svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

                </div>
            </div>
        </div>
        <!--/Săn Deal mỗi ngày-->

        <!--Đồng hồ-->
        <div class="uk-card uk-card-default home__content__card home__content__card--product">
            <div class="uk-card-header uk-padding-small">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="uk-h2 uk-margin-remove home__content__card__title">Đồng hồ</h2>
                    </div>
                    <div class="uk-width-auto">
                        <ul class="home__content__card--product__nav uk-subnav uk-visible@m">
                            <li class="uk-active"><a href="#">Đồng hồ Nam</a></li>
                            <li><a href="#">Đồng hồ Nữ</a></li>
                            <li><a href="#">Thương hiệu nổi bật</a></li>
                            <li><a href="#">Đồng hồ cho bé trai</a></li>
                            <li><a href="#">Đồng hồ cho bé gái</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-card-body uk-padding-remove">
                <div class="uk-child-width-1-2 uk-child-width-1-5@m uk-grid-collapse uk-grid-match" uk-grid>
                    <div class="uk-width-2-5@m uk-width-1-1">
                        <div class="uk-cover-container">
                            <img src="https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/evo_block_product_3_image_1.jpg?1629431129709" alt="" uk-cover>
                            <canvas width="896" height="756"></canvas>
                            <div class="uk-position-bottom home__content__card--product__brand">
                                <div class="uk-child-width-1-4 uk-grid-10 uk-grid-match" uk-grid>
                                    <?php
                                    $dataBrand = array(
                                        'https://bizweb.dktcdn.net/thumb/large/100/371/004/collections/seiko.png?v=1573651933117',
                                        'https://bizweb.dktcdn.net/thumb/large/100/371/004/collections/bulova.png?v=1573651967607',
                                        'https://bizweb.dktcdn.net/thumb/large/100/371/004/collections/fossil.png?v=1573651993940',
                                        'https://bizweb.dktcdn.net/thumb/large/100/371/004/collections/tissot.png?v=1573652020107',
                                        'https://bizweb.dktcdn.net/thumb/large/100/371/004/collections/omega.png?v=1573652045473',
                                        'https://bizweb.dktcdn.net/thumb/large/100/371/004/collections/orient.png?v=1573652088017',
                                        'https://bizweb.dktcdn.net/thumb/large/100/371/004/collections/casio.png?v=1574243908567',
                                        'https://bizweb.dktcdn.net/thumb/large/100/371/004/collections/fossil-817132aa-f689-4b87-9051-ca7912cfd128.png?v=1574243977957',
                                    );
                                    foreach ($dataBrand as $k=>$v): ?>
                                    <div>
                                        <a href="" class="home__content__card--product__brand__item">
                                            <img class="uk-responsive-height" src="<?= $v ?>" alt="">
                                        </a>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($dataProduct as $k=>$v): ?>
                        <div>
                            <div class="home__content__card--product__item">
                                <a href="" class="home__content__card--product__item__thumbnail"><img class="uk-responsive-width" src="<?= $v['src'] ?>" alt=""></a>
                                <h5 class="uk-h5 home__content__card--product__item__name"><a href="" class="uk-link-toggle"><?= $v['title'] ?></a></h5>
                                <div class="uk-child-width-auto uk-grid-5" uk-grid>
                                    <div>
                                        <span class="home__content__card--product__item__price--new"><?= $v['price'] ?></span>
                                    </div>
                                    <?php if ($v['price-old'] != ''): ?>
                                        <div>
                                            <del class="home__content__card--product__item__price--old"><?= $v['price-old'] ?></del>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($v['sale']): ?>
                                        <div>
                                            <span class="uk-badge home__content__card--product__item__price--sale">-<?= rand(3,49) ?>%</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="home__content__card--product__item__bottom-expand">
                                    <div class="uk-child-width-auto uk-grid-5 uk-flex-center uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <button type="button" class="home__content__card--product__item__bottom-expand__btn-add_to_cart uk-button uk-button-secondary">
                                                <div>Mua ngay</div>
                                            </button>
                                        </div>
                                        <div class="uk-width-auto">
                                            <button type="button" class="home__content__card--product__item__bottom-expand__btn-favorites uk-button uk-button-default">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 51.997 51.997" style="enable-background:new 0 0 51.997 51.997;" xml:space="preserve"><path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!--/Đồng hồ-->

        <!--Tìm kiếm phổ biến-->
        <div class="uk-card uk-card-default home__content__card home__content__card--search">
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

                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-collapse uk-grid-match" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_1.jpg?1629431129709',
                                    'title' => 'Đồng hồ chính hãng',
                                ),
                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_2.jpg?1629431129709',
                                    'title' => 'Giày Sneaker',
                                ),

                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_3.jpg?1629431129709',
                                    'title' => 'Nước hoa cao cấp',
                                ),
                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_4.jpg?1629431129709',
                                    'title' => 'Golf',
                                ),

                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_1.jpg?1629431129709',
                                    'title' => 'Đồng hồ chính hãng',
                                ),
                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_2.jpg?1629431129709',
                                    'title' => 'Giày Sneaker',
                                ),

                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_3.jpg?1629431129709',
                                    'title' => 'Nước hoa cao cấp',
                                ),
                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_4.jpg?1629431129709',
                                    'title' => 'Golf',
                                ),

                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_1.jpg?1629431129709',
                                    'title' => 'Đồng hồ chính hãng',
                                ),
                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_2.jpg?1629431129709',
                                    'title' => 'Giày Sneaker',
                                ),

                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_3.jpg?1629431129709',
                                    'title' => 'Nước hoa cao cấp',
                                ),
                                array(
                                    'src' => 'https://bizweb.dktcdn.net/100/371/004/themes/742760/assets/feature_search_image_4.jpg?1629431129709',
                                    'title' => 'Golf',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <?php if ($k%2==0): ?>
                            <li>
                                <div class="uk-child-width-1-1 uk-grid-collapse uk-grid-match uk-flex-column" uk-grid>
                                    <div class="uk-flex-1">
                                        <?php require "template-parts/components/searchItem.php"; ?>
                                    </div>
                                    <?php else: ?>
                                    <div class="uk-flex-1">
                                        <?php require "template-parts/components/searchItem.php"; ?>
                                    </div>
                                </div>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-grid-5"></ul>

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
                            <a href="" class="uk-position-cover"></a>
                        </div>
                        <div class="home__content__card--news__item__margin10s">
                            <h4 class="uk-h4 home__content__card--news__item__title"><a href="" class="uk-link-toggle"><?= $v['title'] ?></a></h4>
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
