<?php include 'header.php'?>
<!doctype html>
<html lang="en">

<body class="theme-orange">


<div id="wrapper">

    
    <div id="main-content">        
        <div class="mail-inbox">
            
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
                <div class="mail-list">
                <ul class="list-unstyled">
                <li class="clearfix">
                            <div class="mail-detail-left">
                                
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                            <img style="width: 50px;" class="rounded-circle avatar" src="assets/images/logo.png" alt="avatar" />
                                        </a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Admin</a></h6></h6>
                                <p class="dep">Online</p>
                                
                            </div>
                            
                </li>
                    <div class="mail-action clearfix pull-left">
                        <div class="fancy-checkbox d-inline-block">
                            <label>
                                <input class="check-all" type="checkbox" name="checkbox">
                                <span></span>
                            </label>
                        </div>
                        <div class="btn-group">
                            <a href="app-inbox.php" class="btn btn-warning btn-sm hidden-sm"><i class="icon icon-refresh"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm hidden-sm"><i class="icon icon-pin"></i></a>
                            <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash"></i></button>
                        </div>
                        
                        <div class="pull-right ml-auto">
                        <div class="pagination-email d-flex">
                         
                            <div class="btn-group m-l-20">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                </ul>
                </div>
                <br>
                <div class="mail-list">
                    <ul class="list-unstyled">
                        <li class="clearfix">
                            <div class="mail-detail-left">
                            
                            <label class="fancy-checkbox">
                                <a href="javascript:void(0);"><img style="width: 50px;" class="rounded-circle avatar" src="../assets/images/12.jpg" alt=""></a>
                            </label>
                          
                            </div>
                            
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-chat.php" class="mail-detail-expand">Doni S.</a></h6></h6>
                                <p class="dep" href="app-chat.php">Oh, ya kak ready silahkan kakak ke menu beli untuk memesan nya....</p>
                                <span class="time" ><i class="icon icon-pin"></i> 23 Juni</span>
                            </div>
                            
                            <div class="hover-action">
                            
                                <button class="btn btn-warning btn-sm "  > <input type="checkbox" name="checkbox" class="checkbox-tick"></button>
                                
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                <a href="javascript:void(0);"><img style="width: 50px;" class="rounded-circle avatar" src="../assets/images/wiskas.jpg" alt=""></a>
                            </label>
                                
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">CS Whiskas</a></h6>
                                <p class="dep">Mohon Maaf Bapak Kami dari pihak Whiskas ingin memberikan sponsorship untuk toko MetShopPet's.</p>
                                <span class="time"><i class="icon icon-pin"></i> 25 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm "  type="checkbox" name="checkbox" class="checkbox-tick"> <input type="checkbox" name="checkbox" class="checkbox-tick"></button>
                               
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix unread">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                <a href="javascript:void(0);"><img style="width: 50px;" class="rounded-circle avatar" src="../assets/images/19.jpg" alt=""></a>
                            </label>
                                
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Sonia Vita sari</a></h6>
                                <p class="dep">Ada Banya Pembelihan hewan yang sudah dibayar di Acc oleh Bapak/Ibu Admin silahkan di...</p>
                                <span class="time">27 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm "  type="checkbox" name="checkbox" class="checkbox-tick"> <input type="checkbox" name="checkbox" class="checkbox-tick"></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                <a href="javascript:void(0);"><img style="width: 50px;" class="rounded-circle avatar" src="../assets/images/bolt.jpg" alt=""></a>
                            </label>
                                <a href="javascript:void(0);" class="mail-star"><i ></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">CS Bolt M.A.</a></h6>
                                <p class="dep">KamI Menawarkan Produk Kami kepada Toko MetShopPet's yaitu Bolt makanan Anjing yang Banyak.... </p>
                                <span class="time">30 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm "  type="checkbox" name="checkbox" class="checkbox-tick"> <input type="checkbox" name="checkbox" class="checkbox-tick"></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                <a href="javascript:void(0);"><img style="width: 50px;" class="rounded-circle avatar" src="../assets/images/16.jpg" alt=""></a>
                            </label>
                                <a href="javascript:void(0);" class="mail-star"><i ></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Frank Camly</a></h6>
                                <p class="dep"><span class="m-r-10">[WrapTheme]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                <span class="time"><i ></i> 31 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm "  type="checkbox" name="checkbox" class="checkbox-tick"> <input type="checkbox" name="checkbox" class="checkbox-tick"></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                <a href="javascript:void(0);"><img style="width: 50px;" class="rounded-circle avatar" src="../assets/images/14.jpg" alt=""></a>
                            </label>
                                <a href="javascript:void(0);" class="mail-star"><i ></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Rochelle Barton</a></h6>
                                <p class="dep">Untuk Bapak/Ibu Admin Apakah Hewan yang mau dijodohkan ini Harus dibersihkan/dimandikan terlibih dahulu.</p>
                                <span class="time">14 Juli</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning  "  type="checkbox" name="checkbox" class="checkbox-tick"> <input type="checkbox" name="checkbox" class="checkbox-tick"></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mail-left">
                <div class="mail-compose m-b-20">
                     <div id="plist" class="people-list">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari...">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                            </div>
                            <ul class="right_chat list-unstyled mb-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/16.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Riska S.</span>
                                                <span class="message">online</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/14.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Muhammad Mail C.S.</span>
                                                <span class="message">online</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/15.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Fika Amrianti</span>
                                                <span class="message">offline sekitar 10 hari yang lalu</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/17.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Siti Vita S.</span>
                                                <span class="message">offline</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/13.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Christian Budiono</span>
                                                <span class="message">online</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/18.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Galuh Vita Sari</span>
                                                <span class="message">online</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/19.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Susiana Triana</span>
                                                <span class="message">offline Terlihat 5 Hari yang lalu</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                            </ul>
                        </div>
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