<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="index.php"><img src="../assets/images/logo.png" alt="HexaBit Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-animated scale-right">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-grid"></i></a>
                        <ul class="dropdown-menu menu-icon app_menu">
                            <li>
                               <a class="#">
                                    <i class="icon-envelope"></i>
                                    <span>Kotak Pesan</span>
                                </a>
                            </li>
                            <li>
                                <a class="#">
                                    <i class="icon-bubbles"></i>
                                    <span>Pesan</span>
                                </a>
                            </li>
                            <li>
                                <a class="#">
                                    <i class="icon-list"></i>
                                    <span>Task</span>
                                </a>
                            </li>
                            <li>
                                <a class="#">
                                    <i class="icon-globe"></i>
                                    <span>Blog</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="app-calendar.php" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a></li>
                    <li><a href="app-chat.php" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a></li>                    
                </ul>
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Cari Disini..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-envelope"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu right_chat email">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                      <img class="media-object " src="../assets/images/12.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Doni S. <small class="float-right">23 Juni</small></span>
                                                <span class="message">pesanan anda sudah saya terima!</span>
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
                            </ul>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu feeds_widget">
                                <li class="header">Kamu Memiliki 5 Notifikasi Baru</li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-thumbs-o-up text-success"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-success">7 masukkan Baru <small class="float-right text-muted">Today</small></h4>
                                            <small>Untuk Website nya sangat Bagus</small>
                                        </div>
                                   </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">Pengguna Baru<small class="float-right text-muted">10:45</small></h4>
                                            <small>Team Sportive dan inovatif</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-question-circle text-warning"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">Peringatan Server <small class="float-right text-muted">10:50</small></h4>
                                            <small>Database Tidak Sesuai</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-check text-danger"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-danger">Isu Terselesaikan <small class="float-right text-muted">11:05</small></h4>
                                            <small>Kami Telah Memperbaiki Bug Di Bagian Shop</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">7 Pesanan baru <small class="float-right text-muted">11:35</small></h4>
                                            <small>Kamu Menerima Order dari Tina.</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-settings"></i></a></li>
                        <li><a href="page-login.php" class="icon-menu"><i class="icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<div id="wrapper">


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Profil Saya</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Halaman</li>
                        <li class="breadcrumb-item active">Profil Saya</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Buat Baru</a>
                </div>
            </div>
        </div>    
        <div class="container-fluid">           

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body text-center">
                            <div class="profile-image mb-3"><img src="../assets/images/admin.jpg" class="rounded-circle" alt=""></div>
                            <div>
                                <h4 class="mb-0"><strong>Mimin</strong></h4>
                                <span>Malang,Jawa Timur</span>
                            </div>                           
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <small class="text-muted">Alamat: </small>
                            <p>Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang Ploso, Malang, Jawa Timur 65152</p>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15807.808378572216!2d112.606886!3d-7.900074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10433eaf1fb2fb4c!2sHummasoft%20Technology!5e0!3m2!1sid!2sid!4v1633495929730!5m2!1sid!2sid" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <hr>
                            <small class="text-muted">Email: </small>
                            <p>abdulmuhaimin@gmail.com</p>                            
                            <hr>
                            <small class="text-muted">Nomor Hp: </small>
                            <p>+62 820-2555-2828</p>
                            <hr>
                            <small class="text-muted">Tanggal Lahir: </small>
                            <p class="m-b-0">23 Maret, 2000</p>
                            <hr>
                            <small class="text-muted">Social: </small>
                            <p><i class="fa fa-twitter m-r-5"></i> twitter.com/abdulmuh</p>
                            <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/abdulmuh</p>
                            <p><i class="fa fa-instagram m-r-5"></i> instagram.com/abdulmuh</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header bline">
                            <h2>Toko MetShopPet's I</h2>
                        </div>
                        <div class="body">
                        <img class="img-fluid" src="../assets/images/gd1.png" alt="img">
                        <div class="header bline">
                            <h2>Toko MetShopPet's II</h2>
                        </div>
                        <img class="img-fluid" src="../assets/images/gd.png" alt="img">
                            <ul class="right_chat list-unstyled mb-0">
                                <li>
                                    <a href="javascript:void(0);">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    </a>                            
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    </a>                            
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    </a>                            
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    </a>                            
                                </li>                        
                            </ul>
                        </div>
                    </div>
                    
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                                <center>Pengaturan Akun</center>
                            </ul>
                        </div>
                    
                        </div>
                        <div class="tab-pane" id="Settings">

                            <div class="card">
                                <div class="header bline">
                                    <h2>Informasi Dasar</h2>
                                    <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                        <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Tindakan</a></li>
                                                <li><a href="javascript:void(0);">Tindakan Lainnya</a></li>
                                                <li><a href="javascript:void(0);">Lain-nya</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Abdul">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Muhaimin">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <div>
                                                    <label class="fancy-radio">
                                                        <input name="gender2" value="male" type="radio" checked>
                                                        <span><i></i>Laki Laki</span>
                                                    </label>
                                                    <label class="fancy-radio">
                                                        <input name="gender2" value="female" type="radio">
                                                        <span><i></i>Perempuan</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                    </div>
                                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Tanggal Lahir">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">                                                
                                                <textarea rows="4" type="text" class="form-control" placeholder="Alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Kota">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Provinsi">
                                            </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Perbarui</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-default">Batal</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="header bline">
                                    <h2>Data Akun</h2>
                                    <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                        <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Tindakan</a></li>
                                                <li><a href="javascript:void(0);">Tindakan Lainnya</a></li>
                                                <li><a href="javascript:void(0);">Lain-nya</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">                                            
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" value="abdulmuhaimin" disabled placeholder="Nama Pengguna">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="abdulmuhaimin@gmail.com" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nomor Telepon">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <h6>Ubah Kata Sandi</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Kata Sandi Lama">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Kata Sandi Baru">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi Baru">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Perbarui</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-default">Batal</button>
                                </div>
                            </div>

                            
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/knob.bundle.js"></script><!-- Jquery Knob-->
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/vendor/summernote/dist/summernote.js"></script>

<script>
    $(function () {
        $('.knob').knob({
            draw: function () {           
            }
        });
    });    
</script>
</body>
</html>