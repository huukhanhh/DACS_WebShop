@extends('front.layout.master')

@section('body')




<!--phần xem chi tiết sản phẩm trong shop START-->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <!--mục bộ lọc theo danh mục, thuơg hiệu,giá, màu, size, thẻ START-->
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Danh mục</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Thương hiệu</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-lv">
                                Louis Vuitton
                                <input type="checkbox" id="bc-lv" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-chanel">
                                Chanel
                                <input type="checkbox" id="bc-chanel" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-dior">
                                Dior
                                <input type="checkbox" id="bc-dior" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Giá</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" name="" id="minamount" />
                                <input type="text" name="" id="maxamount" />
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                            data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Lọc</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Màu sắc</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black" />
                            <label for="cs-black" class="cs-black">Đen</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet" />
                            <label for="cs-violet" class="cs-violet">Tím</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue" />
                            <label for="cs-blue" class="cs-blue">Xanh dương</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow" />
                            <label for="cs-yellow" class="cs-yellow">Vàng</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red" />
                            <label for="cs-red" class="cs-red">Đỏ</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green" />
                            <label for="cs-green" class="cs-green">Xanh lá</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Kích cỡ</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size" />
                            <label for="s-size">s</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size" />
                            <label for="m-size">m</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size" />
                            <label for="l-size">l</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size" />
                            <label for="xs-size">xs</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Thẻ</h4>
                    <div class="fw-tags">
                        <a href="#">Khăn quàng cổ</a>
                        <a href="#">Giày</a>
                        <a href="#">Áo choàng</a>
                        <a href="#">Đầm váy</a>
                        <a href="#">Quần</a>
                        <a href="#">Mũ nam</a>
                        <a href="#">Balo</a>
                    </div>
                </div>
            </div>
            <!--mục bộ lọc theo danh mục, thuơg hiệu,giá, màu, size, thẻ END-->

            <!--mục chi tiết sản phẩm START-->
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="front/img/product-single/product1.webp" alt="" />
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="front/img/product-single/product1.webp">
                                    <img src="front/img/product-single/product1.webp" alt="" />
                                </div>
                                <div class="pt" data-imgbigurl="front/img/product-single/product2.webp">
                                    <img src="front/img/product-single/product2.webp" alt="" />
                                </div>
                                <div class="pt" data-imgbigurl="front/img/product-single/product3.jpg">
                                    <img src="front/img/product-single/product3.jpg" alt="" />
                                </div>
                                <div class="pt" data-imgbigurl="front/img/product-single/product3.jpg">
                                    <img src="front/img/product-single/product-3  .jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>áo thun</span>
                                <h3>Áo thun form ôm tay dài bẹt vai cổ yếm</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <p>
                                    - Áo thun form ôm tay dài bẹt vai cổ yếm. <br />
                                    - Chất liệu thun thoáng mát, có độ nhăn ít, bề mặt chất
                                    liệu mịn, chất rũ nhẹ và độ bền cao. <br />
                                    - Phù hợp mặc đi làm, đi chơi, dạo phố, cà phê cuối tuần
                                    cùng bạn bè.
                                </p>
                                <h4>315.000 VND<span>385.000 VND</span></h4>
                            </div>
                            <div class="pd-color">
                                <h6>Màu sắc</h6>
                                <div class="pd-color-choose">
                                    <div class="cc-item">
                                        <input type="radio" id="cc-black" />
                                        <label for="cc-black"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-yellow" />
                                        <label for="cc-yellow" class="cc-yellow"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-violet" />
                                        <label for="cc-violet" class="cc-violet"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                <div class="sc-item">
                                    <input type="radio" id="sm-size" />
                                    <label for="sm-size">s</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="md-size" />
                                    <label for="md-size">m</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="lg-size" />
                                    <label for="lg-size">l</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="xl-size" />
                                    <label for="xl-size">xs</label>
                                </div>
                            </div>
                            <div class="quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" />
                                    </div>
                                    <a href="#" class="primary-btn pd-cart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <ul class="pd-tags">
                                <li>
                                    <span>Danh mục</span>: More Accessories, Wallet & Cases
                                </li>
                                <li><span>Tags</span>: Clothing, T-shirt, Woman</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">SKU : 00012</div>
                                <div class="pd-social">
                                    <a href="#" class="ti-facebook"></a>
                                    <a href="#" class="ti-twitter-alt"></a>
                                    <a href="#" class="ti-linkedin"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a href="#tab-1" class="active" data-toggle="tab" role="tab">Miêu tả</a>
                                </li>
                                <li>
                                    <a href="#tab-2" data-toggle="tab" role="tab">Thông số</a>
                                </li>
                                <li>
                                    <a href="#tab-3" data-toggle="tab" role="tab">Đánh giá của khách hàng (82)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Giới thiệu</h5>
                                                <p>
                                                    - Áo thun form ôm tay dài bẹt vai cổ yếm. <br />
                                                    - Chất liệu thun thoáng mát, có độ nhăn ít, bề mặt
                                                    chất liệu mịn, chất rũ nhẹ và độ bền cao. <br />
                                                    - Phù hợp mặc đi làm, đi chơi, dạo phố, cà phê
                                                    cuối tuần cùng bạn bè.
                                                </p>
                                                <h5>Đặc trưng</h5>
                                                <p>
                                                    - Chiếc áo tay dài với thiết kế vai bẹt và cổ yếm
                                                    tạo nên vẻ đẹp quyến rũ, tôn lên nét thanh thoát
                                                    của bờ vai và cổ. <br />- Phong cách cổ yếm kết
                                                    hợp với tay dài giúp chiếc áo trở nên vừa cổ điển
                                                    vừa hiện đại, phù hợp cho những buổi đi chơi hay
                                                    hẹn hò. <br />- Thiết kế vai bẹt tinh tế, giúp
                                                    khoe trọn đôi vai trần, mang lại vẻ ngoài thanh
                                                    lịch và cuốn hút. <br />- Chất liệu co giãn và mềm
                                                    mại của áo tay dài cổ yếm giúp người mặc luôn
                                                    thoải mái nhưng vẫn nổi bật.
                                                </p>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="front/img/product-single/tab.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Đánh giá của khách hàng</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Giá</td>
                                                <td>
                                                    <div class="p-price">315.000 VND</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Thêm vào giỏ hàng</td>
                                                <td>
                                                    <div class="cart-add">+ thêm vào giỏ hàng</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Có sẵn</td>
                                                <td>
                                                    <div class="p-stock">Còn 22 trong kho</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Cân nặng</td>
                                                <td>
                                                    <div class="p-weight">1,3kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Kích cỡ</td>
                                                <td>
                                                    <div class="p-size">S, M, L, XS</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Màu sắc</td>
                                                <td>
                                                    <span class="cs-color-pink"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">SKU</td>
                                                <td>
                                                    <div class="p-code">00012</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>2 Bình luận</h4>
                                        <div class="comment-option">
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="front/img/product-single/Remove-bg.ai_1730220607363.png"
                                                        alt="" />
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Đoàn Hữu Khánh <span>27 Oct 2024</span></h5>
                                                    <div class="at-reply">Tuyệt vời !</div>
                                                </div>
                                            </div>
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="front/img/product-single/Remove-bg.ai_1730220607363.png"
                                                        alt="" />
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>My Su <span>10 Aug 2024</span></h5>
                                                    <div class="at-reply">wowwww !</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="personal-rating">
                                            <h6>Đánh giá của bạn</h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="leave-comment">
                                            <h4>Để lại bình luận</h4>
                                            <form action="" class="comment-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Tên" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Email" />
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Lời nhắn nhủ"></textarea>
                                                        <button type="submit" class="site-btn">
                                                            Gửi tin nhắn
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--mục chi tiết sản phẩm START-->
        </div>
    </div>
</section>
<!--sản phẩm trong shop END-->

<!--danh sách sản phẩm liên quan START-->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản Phẩm Liên Quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="front/img/products/product4.webp" alt="" />
                        <div class="sale pp-sale">Giảm giá</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active">
                                <a href="#"><i class="icon_bag_alt"></i></a>
                            </li>
                            <li class="quick-view">
                                <a href="product.html">+ Xem Ngay</a>
                            </li>
                            <li class="w-icon">
                                <a href=""><i class="fa fa-random"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Váy midi</div>
                        <a href="#">
                            <h5>Váy midi lưng thun phối bèo nhẹ nhàng</h5>
                        </a>
                        <div class="product-price">
                            227.500 VND
                            <span>455.000 VND</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="front/img/products/product2.webp" alt="" />
                        <div class="sale pp-sale">Giảm giá</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active">
                                <a href="#"><i class="icon_bag_alt"></i></a>
                            </li>
                            <li class="quick-view">
                                <a href="product.html">+ Xem Ngay</a>
                            </li>
                            <li class="w-icon">
                                <a href=""><i class="fa fa-random"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Váy skort</div>
                        <a href="#">
                            <h5>Váy skort caro phối ren đính nơ bên hông</h5>
                        </a>
                        <div class="product-price">
                            350.000 VND
                            <span>399.000 VND</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="front/img/products/product3.webp" alt="" />
                        <div class="sale pp-sale">Giảm giá</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active">
                                <a href="#"><i class="icon_bag_alt"></i></a>
                            </li>
                            <li class="quick-view">
                                <a href="product.html">+ Xem Ngay</a>
                            </li>
                            <li class="w-icon">
                                <a href=""><i class="fa fa-random"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Áo thun</div>
                        <a href="#">
                            <h5>Áo thun sát nách in hình 'Meow!'</h5>
                        </a>
                        <div class="product-price">
                            178.500 VND
                            <span>255.000 VND</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--danh sách sản phẩm liên quan END-->

@endsection