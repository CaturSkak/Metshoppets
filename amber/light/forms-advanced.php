<!doctype html>
<html lang="en">
<head>
<title>MetShop Pets -Selamat Datang di MetShop Pets</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="logo.png" type="image/logo">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="../assets/vendor/charts-c3/plugin.css"/>
<link rel="stylesheet" href="../assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">


<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/kucing1.gif" width="150" height="125" alt="Neko"></div>
        <p>Sedang Memuat...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="index.php"><img src="../assets/images/icon-light.svg" alt="HexaBit Logo" class="img-fluid logo"></a>
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
                                    <span>Kotak Surat</span>
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

    <div id="rightbar" class="rightbar">
        <ul class="nav nav-tabs-new">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="setting">
                <div class="slim_scroll">
                    <div class="card">
                        <h6>Choose Theme</h6>
                        <ul class="choose-skin list-unstyled mb-0">
                            <li data-theme="purple"><div class="purple"></div></li>
                            <li data-theme="green"><div class="green"></div></li>
                            <li data-theme="orange" class="active"><div class="orange"></div></li>
                            <li data-theme="blue"><div class="blue"></div></li>
                            <li data-theme="blush"><div class="blush"></div></li>
                            <li data-theme="cyan"><div class="cyan"></div></li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled mb-0">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Report Panel Usag</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Email Redirect</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Notifications</span>
                                </label>                      
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Auto Updates</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>Account Settings</h6>
                        <ul class="setting-list list-unstyled mb-0">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Offline</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Location Permission</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Notifications</span>
                                </label>                      
                            </li>
                        </ul>
                    </div>                    
                </div>                
            </div>       
            <div class="tab-pane right_chat" id="chat">
                <div class="slim_scroll">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <div class="card">
                        <h6>Recent</h6>                        
                        <ul class="right_chat list-unstyled mb-0">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Ava Alexander <small class="float-right">Just now</small></span>
                                            <span class="message">Lorem ipsum Veniam aliquip culpa laboris minim tempor</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Debra Stewart <small class="float-right">38min ago</small></span>
                                            <span class="message">Many desktop publishing packages and web page editors</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Susie Willis <small class="float-right">2hr ago</small></span>
                                            <span class="message">Contrary to belief, Lorem Ipsum is not simply random text</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Folisise Chosielie <small class="float-right">2hr ago</small></span>
                                            <span class="message">There are many of passages of available, but the majority</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Marshall Nichols <small class="float-right">1day ago</small></span>
                                            <span class="message">It is a long fact that a reader will be distracted</span>
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

    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="index.php"><img src="logo.png" alt="HexaBit Logo" class="img-fluid logo"><span>MetShop Pet's</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="../assets/images/admin.jpg" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Selamat Datang,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Mimin</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="page-profile.php"><i class="icon-user"></i>Profil Saya</a></li>
                        <li><a href="app-inbox.php"><i class="icon-envelope-open"></i>Pesan</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Pengaturan</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.php"><i class="icon-power"></i>Keluar</a></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li><a href="index.php"><i class="icon-home"></i><span>Beranda</span></a></li>
                    <li><a href="app-inbox.php"><i class="icon-envelope"></i><span>Kotak surat</span></a></li>
                    <li><a href="app-chat.php"><i class="icon-bubbles"></i><span>Pesan</span></a></li>
                    <li>
                        <a href="#Tables" class="has-arrow"><i class="icon-tag"></i><span>Transaksi</span></a>
                        <ul>
                            <li><a href="table-basic.php">Pembelian</a></li>
                            <li><a href="table-normal.php">Perjodohan</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Produk</span></a>
                        <ul>
                            <li><a href="forms-basic.php">Tambah Produk</a></li>
                            <li class="active"><a href="forms-advanced.php">Daftar Produk</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Blog" class="has-arrow"><i class="icon-globe"></i><span>Halaman</span></a>
                        <ul>
                            <li><a href="blog-list.php">Artikel</a></li>
                        </ul>
                    </li>
                    <li><a href="app-taskboard.php"><i class="icon-list"></i><span>Papan tugas</span></a></li>                  
                    <li><a href="app-calendar.php"><i class="icon-calendar"></i><span>Kalender</span></a></li>
                    <li><a href="app-contact.php"><i class="icon-book-open"></i><span>Kontak</span></a></li>              
                    <li>
                        <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Auntentifikasi</span></a>
                        <ul>                                    
                            <li><a href="page-login.php">Masuk</a></li>
                            <li><a href="page-register.php">Daftar</a></li>
                            <li><a href="page-lockscreen.php">Kunci Layar</a></li>
                            <li><a href="page-forgot-password.php">Lupa Kata Sandi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Maps" class="has-arrow"><i class="icon-map"></i><span>Peta</span></a>
                        <ul>
                            <li><a href="map-google.php">Peta Google</a></li>                         
                        </ul>
                    </li>
                </ul>
            </nav>     
        </div>
    </div>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Advanced Form Elements</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Advanced</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-lg-16 col-md-16 col-sm-15">
                    <div class="card">
                        <div class="header">
                            <h2>Daftar Produk / Hewan</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Tindakan</a></li>
                                        <li><a href="javascript:void(0);">Tindakan Lain</a></li>
                                        <li><a href="javascript:void(0);">Lain-nya</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Jenis Hewan/Produk</th>
                                            <th>Rincian</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Gambar</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Anggora Asli</td>
                                            <td>Rp.5.740.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-warning">Menunggu</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Anggora Mix Persia</td>
                                            <td>Rp.4.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                                    <button class="btn btn-sm round btn-outline-success">Diterima</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Persia Asli</td>
                                            <td>Rp.5.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success"> Diterima</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <<td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Mainecoon</td>
                                            <td>Rp.18.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success"> Diterima</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Chihuahua</td>
                                            <td>Rp.16.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success"> Diterima</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Shiba Inu</td>
                                            <td>Rp.6.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success"> Diterima</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Alaskan Malamute</td>
                                            <td>Rp.15.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success"> Diterima</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script><!-- Bootstrap Colorpicker Js --> 
<script src="../assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script><!-- Input Mask Plugin Js --> 
<script src="../assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
<script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script><!-- Multi Select Plugin Js -->
<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script><!-- Bootstrap Tags Input Plugin Js --> 
<script src="../assets/vendor/nouislider/nouislider.js"></script><!-- noUISlider Plugin Js --> 
    
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/advanced-form-elements.js"></script>
</body>
</html>

