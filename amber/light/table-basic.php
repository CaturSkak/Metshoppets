<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">



<div id="wrapper">

    

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Info Pembelian</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Pembelian</li>
                        <li class="breadcrumb-item active">Info Pembelian</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Buat Baru</a>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Pembelian MetShop Pet's<small>Silahkan Klik Konfirmasi Terima Pesanan atau Tolak Pesanan</small></h2>
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
                            <div class="table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Rincian</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Pembayaran</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span>Kayess</span></td>
                                            <td><span class="text-info">Jl. Diponegoro No.65, Malang</span></td>
                                            <td>20-Oktober-2021</td>
                                            <td>Kucing Anggora Asli</td>
                                            <td>1</td>
                                            <td>Rp.5.740.000</td>
                                            <td>BNI Virtual Account</td>
                                            <td><div id="navbar-menu">
                                                <ul class="nav navbar-nav">
                                                <li class="dropdown dropdown-animated scale-left">
                                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                                <i class="icon-picture"></i>
                                                <span class="notification-dot"></span>
                                                </a>
                                                <ul class="dropdown-menu right_chat email">
                                                <li>
                                                <a href="javascript:void(0);">
                                                    <div class="thumb">
                                                        <a class="image">
                                                        <img class="fit-image" width="300px" src="../assets/images/bni.png" alt="Product" />
                                                    </div>
                                                </a>
                                            </li>
                                            </td>
                                            <td><a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Terima</a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger" title="">Tolak</a></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><span>Fira</span></td>
                                            <td><span class="text-info">Perum Permata regency Blok 20 nomor 17 Ngijo, malang</span></td>
                                            <td>20 Oktober 2021</td>
                                            <td>Royal canin Hair & Skin</td>
                                            <td>1</td>
                                            <td>Rp.308.000</td>
                                            <td>Mandiri Virtual Account</td>
                                            <td><div id="navbar-menu">
                                                <ul class="nav navbar-nav">
                                                <li class="dropdown dropdown-animated scale-left">
                                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                                <i class="icon-picture"></i>
                                                <span class="notification-dot"></span>
                                                </a>
                                                <ul class="dropdown-menu right_chat email">
                                                <li>
                                                <a href="javascript:void(0);">
                                                    <div class="thumb">
                                                        <a class="image">
                                                        <img class="fit-image" width="300px" src="../assets/images/mandiri.jpg" alt="Product" />
                                                    </div>
                                                </a>
                                            </li>
                                            </td>
                                            <td><a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Terima</a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger" title="">Tolak</a></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span>Agustina</span></td>
                                            <td><span class="text-info">Jl. Sonokembang,9n Bandungrejosari, Malang</span></td>
                                            <td>18 Oktober 2021</td>
                                            <td>Burung Love Bird</td>
                                            <td>2</td>
                                            <td>Rp.1.680.000</td>
                                            <td>Gopay</td>
                                            <td><div id="navbar-menu">
                                                <ul class="nav navbar-nav">
                                                <li class="dropdown dropdown-animated scale-left">
                                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                                <i class="icon-picture"></i>
                                                <span class="notification-dot"></span>
                                                </a>
                                                <ul class="dropdown-menu right_chat email">
                                                <li>
                                                <a href="javascript:void(0);">
                                                    <div class="thumb">
                                                        <a class="image">
                                                        <img class="fit-image" width="300px" src="../assets/images/gopay.jpeg" alt="Product" />
                                                    </div>
                                                </a>
                                            </li>
                                            </td>
                                            <td><span class="badge badge-success">Diterima</span></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><span>Doni</span></td>
                                            <td><span class="text-info">Jl. Raya Ki Ageng Gribig No.28, Madyopuro, Malang</span></td>
                                            <td>19 Oktober 2021</td>
                                            <td>Kura Kura Brazil</td>
                                            <td>2</td>
                                            <td>Rp.400.000</td>
                                            <td>OVO</td>
                                            <td><div id="navbar-menu">
                                                <ul class="nav navbar-nav">
                                                <li class="dropdown dropdown-animated scale-left">
                                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                                <i class="icon-picture"></i>
                                                <span class="notification-dot"></span>
                                                </a>
                                                <ul class="dropdown-menu right_chat email">
                                                <li>
                                                <a href="javascript:void(0);">
                                                    <div class="thumb">
                                                        <a class="image">
                                                        <img class="fit-image" width="300px" src="../assets/images/ovo.png" alt="Product" />
                                                    </div>
                                                </a>
                                            </li>
                                            </td>
                                            <td><span class="badge badge-success">Diterima</span></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><span>Lina</span></td>
                                            <td><span class="text-info">Jl. Veteran No.17, Ketawanggede, Kec. Lowokwaru, Malang</span></td>
                                            <td>15 Oktober 2021</td>
                                            <td>Anjing Siberian Husky</td>
                                            <td>1</td>
                                            <td>Rp.3.200.000</td>
                                            <td>BNI Virtual Account</td>
                                            <td><div id="navbar-menu">
                                                <ul class="nav navbar-nav">
                                                <li class="dropdown dropdown-animated scale-left">
                                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                                <i class="icon-picture"></i>
                                                <span class="notification-dot"></span>
                                                </a>
                                                <ul class="dropdown-menu right_chat email">
                                                <li>
                                                <a href="javascript:void(0);">
                                                    <div class="thumb">
                                                        <a class="image">
                                                        <img class="fit-image" width="300px" src="../assets/images/bni.png" alt="Product" />
                                                    </div>
                                                </a>
                                            </li>
                                            </td>
                                            <td><span class="badge badge-danger">Ditolak</span></td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $('.sparkbar').sparkline('php', { type: 'bar' });
</script>
</body>
</html>
