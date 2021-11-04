<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">

<div id="wrapper">

    

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Pesan</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Pesan</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Buat Baru</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card chat-app">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <div class="row clearfix">
                                    <div class="col-lg-6">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                            <img src="assets/images/logo.png" alt="avatar" />
                                        </a>
                                        <div class="chat-about">
                                            <h6 class="m-b-0">Admin </h6>
                                            <small>Online</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 hidden-sm text-right">
                                        <a href="javascript:void(0);" class="btn btn-warning"><i class="icon-camera text-light"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-camcorder"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-secondary"><i class="icon-settings"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-secondary"><i class="icon-question"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-history">
                                <ul class="right_chat email">
                               
                                <li>
                                    <a href="app-chat.php">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/12.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Muhammad Doni S. <small class="float-right">27 Juni</small></span>
                                                <span class="message">Oh, ya kak ready silahkan kakak ke menu beli untuk memesan nya.</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/wiskas.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Cs Whiskas <small class="float-right">25 Juni</small></span>
                                                <span class="message">Mohon Maaf Bapak Kami dari pihak Whiskas ingin memberikan sponsorship..</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/19.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Sonia Vita Sari <small class="float-right">27 Juni</small></span>
                                                <span class="message">Ada Banya Pembelihan hewan yang sudah dibayar di Acc oleh Bapak/Ibu...</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="../assets/images/bolt.png" alt="">
                                            <div class="media-body">
                                                <span class="name">Cs Bolt M.A. <small class="float-right">30 Juni</small></span>
                                                <span class="message">KamI Menawarkan Produk Kami kepada Toko MetShopPet's yaitu Bolt</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </div>
                            
                        </div>
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
    
</div>

<!-- Default Size -->
<div class="modal fade" id="view_info" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">User Details</h6>
            </div>
            <div class="modal-body">
                <div class="body top_counter">
                    <div class="icon">
                        <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    </div>
                    <div class="content m-t-5">
                        <div>Admin MetShopPet's</div>
                        <h6>Ahmad Catur Y.</h6>
                    </div>
                </div>
                <hr>                
                <small class="text-muted">Alamat </small>
                <p>Lumajang Kec.Labruk Lor</p>
                <small class="text-muted">Email address: </small>
                <p>Catur454@gmail.com</p>
                <small class="text-muted">Mobile: </small>
                <p>+ 62 856-0895-1053</p>
                <small class="text-muted">Birth Date: </small>
                <p class="m-b-0">22 Agustus, 1999</p>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/easypiechart.bundle.js"></script><!-- easypiechart Plugin Js -->
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
</body>
</html>
