<!doctype html>
<html lang="en">
<?php include 'header.php'?>

    <div id="main-content">        
        <div class="mail-inbox">
            <div class="mobile-left">
                <a href="javascript:void(0);" class="btn btn-primary toggle-email-nav"><i class="fa fa-bars"></i></a>
            </div>
            <div class="mail-left">
                <div class="mail-compose m-b-20">
                    <a href="app-compose.php" class="btn btn-danger btn-block"> + Tulis</a>
                </div>
                <div class="mail-side">
                    <ul class="nav">
                        <li class="active"><a href="javascript:void(0);"><i class="icon-envelope"></i>Kotak Surat<span class="badge badge-primary float-right">6</span></a></li>
                        <li><a href="javascript:void(0);"><i class="icon-cursor"></i>Terkirim</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Draf<span class="badge badge-info float-right">3</span></a></li>
                        <li><a href="javascript:void(0);"><i class="icon-action-redo"></i>Teruskan</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-star"></i>Berbintang<span class="badge badge-warning float-right">6</span></a></li>
                        <li><a href="javascript:void(0);"><i class="icon-trash"></i>Kotak Sampah<span class="badge badge-danger float-right">9</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="mail-right check-all-parent">
                <div class="header d-flex align-center">
                    <h2>Pesan Masuk</h2>
                    <form class="ml-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Disini.." aria-label="Search Mail" aria-describedby="search-mail">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mail-action clearfix">
                    <div class="pull-left">
                        <div class="fancy-checkbox d-inline-block">
                            <label>
                                <input class="check-all" type="checkbox" name="checkbox">
                                <span></span>
                            </label>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:void(0);" class="btn btn-default btn-sm hidden-sm">Segarkan</a>
                            <a href="javascript:void(0);" class="btn btn-default btn-sm hidden-sm">Arsip</a>
                            <a href="javascript:void(0);" class="btn btn-default btn-sm">Sampah</a>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selengkapnya</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Tandai Sudah Yang Dibaca</a>
                                <a class="dropdown-item" href="javascript:void(0);">Tandai Belum Yang DiBaca</a>
                                <a class="dropdown-item" href="javascript:void(0);">Spam</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);">Hapus</a>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right ml-auto">
                        <div class="pagination-email d-flex">
                            <p>1-50/295</p>
                            <div class="btn-group m-l-20">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mail-list">
                    <ul class="list-unstyled">
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Doni S.</a><span class="badge badge-danger">Pemasok</span></h6></h6>
                                <p class="dep">Barang yang anda Pesan Sudah sampai kegudang Toko MetShopPet's Anda...</p>
                                <span class="time">23 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">CS Whiskas</a><span class="badge badge-default mb-0">Sponsorship</span></h6>
                                <p class="dep">Mohon Maaf Bapak Kami dari pihak Whiskas ingin memberikan sponsorship untuk toko MetShopPet's.</p>
                                <span class="time"><i class="fa fa-paperclip"></i> 25 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix unread">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Sonia Vita sari</a><span class="badge badge-success">Pekerja Di Bagian Penjualan Hewan</span></h6>
                                <p class="dep">Ada Banya Pembelihan hewan yang sudah dibayar di Acc oleh Bapak/Ibu Admin silahkan di...</p>
                                <span class="time">27 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">CS Bolt M.A.</a><span class="badge badge-default mb-0">Sponsorship</span></h6>
                                <p class="dep">KamI Menawarkan Produk Kami kepada Toko MetShopPet's yaitu Bolt makanan Anjing yang Banyak.... </p>
                                <span class="time">30 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Frank Camly</a><span class="badge badge-danger">Pemasok</span></h6>
                                <p class="dep"><span class="m-r-10">[WrapTheme]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                <span class="time"><i class="fa fa-paperclip"></i> 31 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Rochelle Barton</a><span class="badge badge-success">Pekerja Di Bagian Perjodohan Hewan</span></h6>
                                <p class="dep">Untuk Bapak/Ibu Admin Apakah Hewan yang mau dijodohkan ini Harus dibersihkan/dimandikan terlibih dahulu.</p>
                                <span class="time">14 Juli</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
<script>
    $('.toggle-email-nav').on('click', function() {
		$('.mail-left').toggleClass('open');
	});
</script>
</body>
</html>