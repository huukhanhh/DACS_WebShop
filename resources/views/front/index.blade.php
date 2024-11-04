@extends('front.layout.master')

@section('title', 'Home')

@section('body')
<!-- phần slide to nhất START-->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="front/img/bg1.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag, kids</span>
                        <h1>Ngày Hội Giảm Giá</h1>
                        <p>Chào mừng đến với Ngày hội Giảm giá - cơ hội mua sắm lớn nhất trong năm! Săn ngay các sản
                            phẩm yêu thích với mức giảm giá cực khủng, đừng bỏ lỡ! </p>
                        <a href="#" class="primary-btn">Mua Ngay</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Giảm Giá <span>50%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="front/img/bg2.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag, kids</span>
                        <h1>Ngày Hội Giảm Giá</h1>
                        <p>Tưng bừng khai hội Ngày hội Giảm giá! Đây là dịp hoàn hảo để sắm sửa những món đồ yêu
                            thích với mức giá siêu hấp dẫn. Đừng chần chừ, ưu đãi lớn đang chờ bạn!</p>
                        <a href="#" class="primary-btn">Mua Ngay</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Giảm Giá <span>50%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag, kids</span>
                        <h1>Ngày Hội Giảm Giá</h1>
                        <p>Chỉ trong Ngày hội Giảm giá lần này - giảm giá sâu, sản phẩm chất lượng! Hãy để chúng tôi
                            giúp bạn mua sắm thả ga mà không lo về giá. Cơ hội có hạn, nhanh tay nhé!</p>
                        <a href="#" class="primary-btn">Mua Ngay</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Giảm Giá <span>50%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag, kids</span>
                        <h1>Ngày Hội Giảm Giá</h1>
                        <p>Ngày hội Giảm giá đã chính thức bắt đầu! Nhanh tay rinh về những ưu đãi đặc biệt, giảm
                            giá lên đến 50%! Mua sắm ngay để không bỏ lỡ cơ hội có 1-0-2 này!</p>
                        <a href="#" class="primary-btn">Mua Ngay</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Giảm Giá <span>50%</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- phần slide to nhất END-->


<!--phần banner START-->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-1.jpg" alt="">
                    <div class="inner-text">
                        <h4>Men's</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-2.jpg" alt="">
                    <div class="inner-text">
                        <h4>Women's</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-3.jpg" alt="">
                    <div class="inner-text">
                        <h4>Kid's</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--phần banner END-->


<!-- phần spham nổi bật wonman START-->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                    <h2>Women's</h2>
                    <a href="#">Khám Phá Thêm</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">Quần áo</li>
                        <li>Túi xách</li>
                        <li>Giày</li>
                        <li>Phụ kiện</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/women1.webp" alt="">
                            <div class="sale">Giảm giá</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Xem Nhanh</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Áo hoạ tiết sát nách cổ tròn vai thắt nơ</div>
                            <a href="">
                                <h5>Áo Hoa Nhí</h5>
                            </a>
                            <div class="product-price">
                                250.000 VND
                                <span>315.000 VND</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/women2.webp" alt="">
                            <div class="sale">Giảm giá</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Xem Nhanh</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Áo thun 2 dây hoạ tiết phối ren đính nơ ngực</div>
                            <a href="">
                                <h5>Áo 2 dây</h5>
                            </a>
                            <div class="product-price">
                                170.000 VND
                                <span>255.000 VND</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/women3.webp" alt="">
                            <div class="sale">Giảm giá</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Xem Nhanh</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Set áo khoác cổ tròn tay dài và chân váy ngắn phối ren</div>
                            <a href="">
                                <h5>Set Thanh Lịch</h5>
                            </a>
                            <div class="product-price">
                                550.000 VND
                                <span>615.000 VND</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/women4.webp" alt="">
                            <div class="sale">Giảm giá</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Xem Nhanh</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Đầm mini hoạ tiết hoa sát nách nhún ngực thun eo</div>
                            <a href="">
                                <h5>Váy Hoa Nhí</h5>
                            </a>
                            <div class="product-price">
                                416.000 VND
                                <span>595.000 VND</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- phần spham nổi bật wonman END -->


<!-- phần hiển thị thông tin khuyến mãi START-->
<section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Ưu Đãi Trong Tuần</h2>
                <p>Đây là chương trình khuyến mãi đặc biệt của cửa hàng chúng tớ tung ra mỗi tuần, với các sản phẩm
                    được giảm giá và có các ưu đãi hấp dẫn trong thời gian giới hạn. Bạn đừng bỏ lỡ mà hãy nhanh tay
                    đặt ngay nhé! </p>
                <div class="product-price">
                    380.000 VND
                    <span>/ Túi xách</span>
                </div>
            </div>
            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>40</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Secs</p>
                </div>
            </div>
            <a href="" class="primary-btn">Mua Ngay</a>
        </div>
    </div>
</section>
<!-- phần hiển thị thông tin khuyến mãi END-->


<!-- phần spham nổi bật men START-->
<section class="men-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">Quần áo</li>
                        <li>Túi xách</li>
                        <li>Giày</li>
                        <li>Phụ kiện</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/men1.webp" alt="">
                            <div class="sale">Giảm giá</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Xem Nhanh</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Áo polo nam chất liệu Coolmax thoáng mát</div>
                            <a href="">
                                <h5>Áo Polo</h5>
                            </a>
                            <div class="product-price">
                                445.000 VND
                                <span>500.000 VND</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/men2.webp" alt="">
                            <div class="sale">Giảm giá</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Xem Nhanh</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Áo polo nam thoáng mát, mỏng nhẹ và dễ chịu.</div>
                            <a href="">
                                <h5>Áo Polo</h5>
                            </a>
                            <div class="product-price">
                                385.000 VND
                                <span>415.000 VND</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/men3.webp" alt="">
                            <div class="sale">Giảm giá</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Xem Nhanh</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Set áo áo polo phối quần tây đen thanh lịch, nam tính.</div>
                            <a href="">
                                <h5>Set Thanh Lịch</h5>
                            </a>
                            <div class="product-price">
                                999.000 VND
                                <span>1.110.000 VND</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/men4.png" alt="">
                            <div class="sale">Giảm giá</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Xem Nhanh</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Áo sơ mi dài tay nam chất liệu Bamboo mềm mịn thoáng mát.
                            </div>
                            <a href="">
                                <h5>Áo sơ mi</h5>
                            </a>
                            <div class="product-price">
                                795.000 VND
                                <span>850.000 VND</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                    <h2>Men's</h2>
                    <a href="#">Khám Phá Thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- phần spham nổi bật men END-->


<!-- phần hiển thị mạng xã hội START-->
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Mysu & Khanh</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Mysu & Khanh</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Mysu & Khanh</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Mysu & Khanh</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Mysu & Khanh</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Mysu & Khanh</a></h5>
        </div>
    </div>
</div>
<!-- phần hiển thị mạng xã hội END-->


<!-- phần hiển thị blog mới nhất START-->
<section class="lastest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Bài viết từ Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-1.avif" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                October 27, 2024
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="">
                            <h4>Những phong cách đường phố ấn tượng nhất từ tuần lễ thời trang của Mysu & Khanh!
                            </h4>
                        </a>
                        <p>Khám phá những phong cách đường phố ấn tượng nhất từ tuần lễ thời trang Đà Nẵng, do Mysu
                            & Khanh mang đến những dấu ấn thời trang đầy cảm hứng, độc đáo và đậm chất riêng!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-2.avif" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                October 27, 2024
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="">
                            <h4>Outfits ấn tượng từ các tín đồ thời trang mùa này</h4>
                        </a>
                        <p>Hãy cùng chiêm ngưỡng những bộ cánh đầy sáng tạo và ấn tượng từ các tín đồ thời trang,
                            mang đến nguồn cảm hứng bất tận cho mùa này với sự kết hợp hoàn hảo giữa xu hướng và cá
                            tính.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-3.png" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                October 27, 2024
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="">
                            <h4>Phong cách thời trang cá tính được yêu thích tại tuần lễ Đà Nẵng của Mysu & Khanh
                            </h4>
                        </a>
                        <p>Khám phá những bộ trang phục mang đậm dấu ấn cá nhân từ các tín đồ thời trang tại tuần lễ
                            Đà Nẵng, nơi mỗi phong cách đều kể một câu chuyện riêng và thể hiện cái tôi độc đáo của
                            người mặc.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Miễn phí ship</h6>
                            <p>Áp dụng cho tất cả đơn hàng trên 99k.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Giao hàng đúng hạn</h6>
                            <p>Cam kết giao đúng hạn.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-3.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Thanh toán an toàn</h6>
                            <p>100% bảo mật cao.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- phần hiển thị blog mới nhất START-->

@endsection