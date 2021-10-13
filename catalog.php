<?php $data["title"] = "Danh muc sp"; ?>
<?php require "template-parts/layouts/header.php"; ?>
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
<div class="catalog">
    <div class="uk-section-xsmall chitiet__section1">
        <div class="uk-container">
            <ul class="uk-breadcrumb chitiet__breadcrumb">
                <li><a href="" uk-icon="icon: home; ratio: 1"></a></li>
                <li><a href="">Máy in - TB văn phòng</a></li>
                <li><span>Máy in văn phòng</span></li>
            </ul>
        </div>
    </div>
    <div class="uk-container uk-padding-remove">
        <div class="catalog__margin uk-background-default">
            <div class="uk-padding-small catalog__box">
                <div class="uk-grid-15-m uk-grid-10 uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <span class="catalog__box__label">Sắp xếp theo</span>
                    </div>
                    <div class="uk-width-auto@s">
                        <div class="uk-grid-5 uk-child-width-auto" uk-grid>
                            <div>
                                <a href="" class="catalog__box__btn uk-button uk-button-default">Mới nhất</a>
                            </div>
                            <div>
                                <a href="" class="catalog__box__btn uk-button uk-button-default">Giá tăng dần</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-2 uk-child-width-1-5@m uk-grid-collapse uk-grid-match" uk-grid>
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
        <ul class="uk-pagination uk-flex-center catalog__pagination" uk-margin>
            <li><a href="#"><span uk-pagination-previous></span></a></li>
            <li><a href="#">1</a></li>
            <li class="uk-disabled"><span>...</span></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li class="uk-active"><span>7</span></li>
            <li><a href="#">8</a></li>
            <li><a href="#"><span uk-pagination-next></span></a></li>
        </ul>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>
