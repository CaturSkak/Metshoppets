<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="en">

    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Pesan</h2>
                        <ul>
                            <li><a href="index.php">Beranda</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Checkout Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Coupon Accordion Start -->
                    <div class="coupon-accordion">

                        <!-- Title Start -->
                        <h3 class="title">Sudah Punya Akun? <span id="showlogin">Klik disini untuk Login</span></h3>
                        <!-- Title End -->

                        <!-- Checkout Login Start -->
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <p class="coupon-text mb-2">Login dengan akun untuk memproses pesanan.</p>

                                <!-- Form Start -->
                                <form action="#">
                                    <!-- Input Email Start -->
                                    <p class="form-row-first">
                                        <label>Username atau email <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <!-- Input Email End -->

                                    <!-- Input Password Start -->
                                    <p class="form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="password">
                                    </p>
                                    <!-- Input Password End -->

                                    <!-- Remember Password Start -->
                                    <p class="form-row mb-2">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me" class="checkbox-label">Ingat saya</label>
                                    </p>
                                    <!-- Remember Password End -->

                                    <!-- Lost Password Start -->
                                    <p class="lost-password"><a href="#">Lupa Password?</a></p>
                                    <!-- Lost Password End -->

                                </form>
                                <!-- Form End -->

                            </div>
                        </div>
                        <!-- Checkout Login End -->

                        <!-- Title Start -->
                        <h3 class="title">Punya Voucher Kupon? <span id="showcoupon">Klik Disini untuk Memakai Kupon</span></h3>
                        <!-- Title End -->

                        <!-- Checkout Coupon Start -->
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon d-flex">
                                        <input placeholder="Kode Voucher" type="text">
                                        <input class="btn btn-primary btn-hover-dark rounded-0" value="Pakai Voucher" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- Checkout Coupon End -->

                    </div>
                    <!-- Coupon Accordion End -->
                </div>
            </div>
            <div class="row mb-n4">
                <div class="col-lg-6 col-12 mb-4">

                    <!-- Checkbox Form Start -->
                    <form action="#">
                        <div class="checkbox-form">

                            <!-- Checkbox Form Title Start -->
                            <h3 class="title">Detail Pesanan</h3>
                            <!-- Checkbox Form Title End -->

                            <div class="row">

                                <!-- Select Country Name Start -->
                                <div class="col-md-12 mb-6">
                                    <div class="checkout-form-list">
                                        <label>Jenis Hewanmu <span class="required">*</span></label>
                                        <input placeholder="Isi Jenis Hewanmu yang akan dijodohkan" type="text">    
                                       
                                    </div>
                                </div>
                                <!-- Select Country Name End -->

                                <!-- Select Country Name Start -->
                                <div class="col-md-12 mb-6">
                                    <div class="country-select">
                                        <label>Provinsi <span class="required">*</span></label>
                                        <select class="myniceselect nice-select wide rounded-0">
                                            <option data-display="Bangladesh">Jawa Timur</option>
                                            <option value="uk">Jawa Tengah</option>
                                            <option value="rou">Jawa Barat</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Country Name End -->

                                <!-- First Name Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Nama Depan <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <!-- First Name Input End -->

                                <!-- Last Name Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Nama Belakang <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <!-- Last Name Input End -->

                                <!-- Company Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Nama Panggilan</label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <!-- Company Name Input End -->

                                <!-- Address Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Alamat <span class="required">*</span></label>
                                        <input placeholder="Alamat Rumah" type="text">
                                    </div>
                                </div>
                                <!-- Address Input End -->

                                <!-- Optional Text Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <!-- Optional Text Input End -->

                                <!-- Town or City Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Kota / Kabupaten <span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <!-- Town or City Name Input End -->

                                <!-- State or Country Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Provinsi <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <!-- State or Country Input End -->

                                <!-- Postcode or Zip Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Kode Pos <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <!-- Postcode or Zip Input End -->

                                <!-- Email Address Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input placeholder="" type="email">
                                    </div>
                                </div>
                                <!-- Email Address Input End -->

                                <!-- Phone Number Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Telephone <span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <!-- Phone Number Input End -->

                                <!-- Checkout Form List checkbox Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                        <input id="cbox" type="checkbox">
                                        <label for="cbox" class="checkbox-label">Daftar Sekarang?</label>
                                    </div>
                                    <div id="cbox-info" class="checkout-form-list create-account">
                                        <p class="mb-2">Buat akun dengan memasukkan informasi di bawah ini. Jika Anda adalah Customer yang sudah punya akun, silakan login di bagian atas halaman.</p>
                                        <label>Password Akun <span class="required">*</span></label>
                                        <input placeholder="Password" type="password">
                                    </div>
                                </div>
                                <!-- Checkout Form List checkbox End -->

                            </div>

                            <!-- Different Address Start -->
                            <div class="different-address">
                                <!-- Ship Different Title Checkbox Start -->
                                <div class="ship-different-title">
                                    <div>
                                        <input id="ship-box" type="checkbox">
                                        <label for="ship-box" class="checkbox-label">Kirim Ke Alamat lain?</label>
                                    </div>
                                </div>
                                <!-- Ship Different Title Checkbox End -->

                                <!-- Ship Box Info Start -->
                                <div id="ship-box-info" class="row mt-2">

                                    <!-- Select Country Name Start -->
                                    <div class="col-md-12">
                                        <div class="myniceselect country-select clearfix">
                                            <label>Provinsi <span class="required">*</span></label>
                                            <select class="myniceselect nice-select wide rounded-0">
                                                <option data-display="Bangladesh">Jawa Timur</option>
                                                <option value="uk">Jawa Tengah</option>
                                                <option value="rou">Jawa Barat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Select Country Name End -->

                                    <!-- First Name Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nama Depan <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <!-- First Name Input End -->

                                    <!-- Last Name Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nama Belakang <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <!-- Last Name Input End -->

                                    <!-- Company Name Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nama Panggilan</label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <!-- Company Name End -->

                                    <!-- Address Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Alamat <span class="required">*</span></label>
                                            <input placeholder="Alamat rumah" type="text">
                                        </div>
                                    </div>
                                    <!-- Address Input End -->

                                    <!-- Optional Text Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <!-- Optional Text End -->

                                    <!-- Town or City Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Kota / Kabupaten <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <!-- Town or City Input End -->

                                    <!-- State or Country Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Provinsi <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <!-- State or Country Input End -->

                                    <!-- Postcode or Zip Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Kode Pos <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <!-- Postcode or Zip Input End -->

                                    <!-- Email Address Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input placeholder="" type="email">
                                        </div>
                                    </div>
                                    <!-- Email Address Input End -->

                                    <!-- Phone Number Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Telephone <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <!-- Phone Number Input End -->

                                </div>
                                <!-- Ship Box Info End -->

                                <!-- Order Notes Textarea Start -->
                                <div class="order-notes mt-3 mb-n2">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Catatan</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Catatan Pesanananmu."></textarea>
                                    </div>
                                </div>
                                <!-- Order Notes Textarea End -->

                            </div>
                            <!-- Different Address End -->
                        </div>
                    </form>
                    <!-- Checkbox Form End -->

                </div>

                <div class="col-lg-6 col-12 mb-4">

                    <!-- Your Order Area Start -->
                    <div class="your-order-area border">

                        <!-- Title Start -->
                        <h3 class="title">Pesanan Anda</h3>
                        <!-- Title End -->

                        <!-- Your Order Table Start -->
                        <div class="your-order-table table-responsive">
                            <table class="table">

                                <!-- Table Head Start -->
                                <thead>
                                    <tr class="cart-product-head">
                                        <th class="cart-product-name text-start">Produk</th>
                                        <th class="cart-product-total text-end">Total</th>
                                    </tr>
                                </thead>
                                <!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="cart-product-name text-start ps-0"> Anjing Shiba Inu<strong class="product-quantity"> × 1</strong></td>
                                        <td class="cart-product-total text-end pe-0"><span class="amount">Rp.6.000.000</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name text-start ps-0"> Kucing Anggora Asli<strong class="product-quantity"> × 1</strong></td>
                                        <td class="cart-product-total text-end pe-0"><span class="amount">Rp.5.740.000</span></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->

                                <!-- Table Footer Start -->
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th class="text-start ps-0">Subtotal</th>
                                        <td class="text-end pe-0"><span class="amount">Rp.11.740.000</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th class="text-start ps-0">Order Total</th>
                                        <td class="text-end pe-0"><strong><span class="amount">Rp.11.740.000</span></strong></td>
                                    </tr>
                                </tfoot>
                                <!-- Table Footer End -->

                            </table>
                        </div>
                        <!-- Your Order Table End -->

                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <div class="payment-accordion">
                              


                        <div class="single-payment">
                                    <h5 class="panel-title mb-3">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Bank Tranfer
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body rounded-0">
                                            <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                               <label class="fit-image ms-1"><input required type="radio" class="pixel-radio ml-auto align-self-center mb-3"  type="radio"></input  type="radio" name="tipebayar" value="bri" required><a> &nbsp;&nbsp;</a><img src="assets/images/payment/mdr.png" class="bank-icon rounded-circle"><strong> &nbsp;&nbsp;Mandiri</strong> </label>
                                
                            </div>

                             <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                               <label class="fit-image ms-1"><input required type="radio" class="pixel-radio ml-auto align-self-center mb-3"  type="radio"></input  type="radio" name="tipebayar" value="bri" required><a> &nbsp;&nbsp;&nbsp;&nbsp;</a><img src="assets/images/payment/bnii.png" class="bank-icon rounded-circle"><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BNI</strong> </label>
                                
                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="single-payment">
                                    <h5 class="panel-title mb-3">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-2" aria-expanded="false" aria-controls="collapseExample-2">
                                            Uang Digital
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample-2">
                                        <div class="card card-body rounded-0">
                                            <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                                <label class="fit-image ms-1"><input required type="radio" class="pixel-radio ml-auto align-self-center mb-3"  type="radio">
                                    
                                </input  type="radio" name="tipebayar" value="bri" required><a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><img src="assets/images/payment/oppo.png" class="bank-icon rounded-circle"><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ovo</strong> </label>
                                
                            </div>

                             <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                                <label class="fit-image ms-1"><input required type="radio" class="pixel-radio ml-auto align-self-center mb-3"  type="radio"></input  type="radio" name="tipebayar" value="bri" required><a> &nbsp;&nbsp;</a><img src="assets/images/payment/gopay.png" class="bank-icon rounded-circle"><strong> &nbsp;&nbsp;&nbsp;&nbsp;Gopay</strong> </label>
                                
                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            <div class="order-button-payment">
                                <a href="bayar.php" class="btn btn-primary btn-hover-secondary rounded-0 w-100">Checkout</a>
                            </div>
                        </div>
                        <!-- Payment Accordion Order Button End -->
                    </div>
                    <!-- Your Order Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->

   <?php include 'footer.php'?>
    <!-- Modal Start  -->
    <div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/1.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/2.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/3.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/4.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/5.png" alt="Product">
                                    </a>
                                </div>

                                <!-- Swiper Pagination Start -->
                                <!-- <div class="swiper-pagination d-md-none"></div> -->
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="ti-arrow-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="ti-arrow-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery position-relative">

                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title">Single Product Slider</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Rating Start -->
                            <span class="rating justify-content-start mb-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                            <!-- Rating End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span class="regular-price">$70.00</span>
                                <span class="old-price"><del>$85.00</del></span>
                            </div>
                            <!-- Price Box End -->

                            <!-- SKU Start -->
                            <div class="sku mb-3">
                                <span>SKU: 12345</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                            <div class="product-inventroy mb-3">
                                <span class="inventroy-title"> <strong>Availability:</strong></span>
                                <span class="inventory-varient">12 Left in Stock</span>
                            </div>
                            <!-- Product Inventory End -->

                            <!-- Description Start -->
                            <p class="desc-content mb-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <!-- Description End -->

                            <!-- Quantity Start -->
                            <div class="quantity d-flex align-items-center justify-content-start mb-5">
                                <span class="me-2"><strong>Qty: </strong></span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Cart Button Start -->
                            <div class="cart-btn action-btn mb-6">
                                <div class="action-cart-btn-wrapper d-flex justify-content-start">
                                    <div class="add-to_cart">
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.php">Add to cart</a>
                                    </div>
                                    <a href="wishlist.php" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <!-- Cart Button End -->

                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <div class="widget-social justify-content-center mb-6">
                                    <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                    <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                    <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                    <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                    <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                                </div>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Payment Option Start -->
                            <div class="payment-option mt-4 d-flex justify-content-start">
                                <span><strong>Payment: </strong></span>
                                <a href="#">
                                    <img class="fit-image ms-1" src="assets/images/payment/payment_large.png" alt="Payment Option Image">
                                </a>
                            </div>
                            <!-- Payment Option End -->

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top ti-angle-double-up"></i>
        <i class="arrow-bottom ti-angle-double-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="fa fa-times"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Inner Wrapper Start -->
            <div class="mobile-menu-inner-wrapper">
                <!-- Mobile Menu Search Box Start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input class="search-input-offcanvas" type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <!-- Mobile Menu Search Box End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Home One</a></li>
                                    <li><a href="index-2.php">Home Two</a></li>
                                    <li><a href="index-3.php">Home Three</a></li>
                                    <li><a href="index-4.php">Home Four</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="shop.php">Shop Grid</a></li>
                                    <li><a href="shop-left-sidebar.php">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.php">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-fullwidth.php">Shop List Fullwidth</a></li>
                                    <li><a href="shop-list-left-sidebar.php">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.php">Shop List Right Sidebar</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="cart.php">Shopping Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="compare.php">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="single-product.php">Single Product</a></li>
                                    <li><a href="single-product-sale.php">Single Product Sale</a></li>
                                    <li><a href="single-product-group.php">Single Product Group</a></li>
                                    <li><a href="single-product-normal.php">Single Product Normal</a></li>
                                    <li><a href="single-product-affiliate.php">Single Product Affiliate</a></li>
                                    <li><a href="single-product-slider.php">Single Product Slider</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="faq.php">Faq</a></li>
                                    <li><a href="error-404.php">Error 404</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
                                    <li><a href="login.php">Login | Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="blog-left-sidebar.php">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.php">Blog Details</a></li>
                                    <li><a href="blog-details-sidebar.php">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Language, Currency & Link Start -->
                <div class="offcanvas-lag-curr mb-6">
                    <div class="header-top-lan-curr-link">
                        <div class="header-top-lan dropdown">
                            <h4 class="title">Language:</h4>
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Japanese</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Romanian</a></li>
                            </ul>
                        </div>
                        <div class="header-top-curr dropdown">
                            <h4 class="title">Currency:</h4>
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Language, Currency & Link End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner Wrapper End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->


    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Plugins JS -->


    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdown.min.js"></script>
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!-- 
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>  
    -->

    <!--Main JS-->
    <script src="assets/js/main.js"></script>
</body>

</html>