<!doctype html>
<html lang="en">
<?php include 'header.php'?>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Beranda</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Beranda</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Buat Baru</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-12">
                    <div class="card top_report">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-dollar text-col-blue"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Pendapatan</h6>
                                            <span class="font700">Rp.9.450.000</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                    <small class="text-muted">Hasil Selama Sebulan</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-bar-chart-o text-col-green"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Pengeluaran</h6>
                                            <span class="font700">Rp.2.500.000</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="28"></div>
                                    </div>
                                    <small class="text-muted">Pengeluaran Selama Sebulan</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-shopping-cart text-col-red"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Pesanan</h6>
                                            <span class="font700">25 Barang/Hewan</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-red mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="41"></div>
                                    </div>
                                    <small class="text-muted">Pesanan Selama Sebulan</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-heart" aria-hidden="true"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Penjodohoan</h6>
                                            <span class="font700">15 Hewan</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="50"></div>
                                    </div>
                                    <small class="text-muted">Penjodohan di bulan ini</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-16 col-md-16 col-sm-15">
                    <div class="card">
                        <div class="header">
                            <h2>Pesanan Yang Diterima</h2>
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
                                            <th>Tanggal</th>
                                            <th>Tipe</th>
                                            <th>Jenis Hewan/Produk</th>
                                            <th>Rincian</th>
                                            <th>Harga</th>
                                            <th>Jumlah/hari</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>20-Oktober-2021 10:51:51</td>
                                            <td>Beli</td>
                                            <td>
                                                Hewan Peliharaan</td>
                                            <td>
                                                Kucing Anggora Asli</td>
                                            <td>Rp.5.740.000</td>
                                            <td>1</td>
                                            <td>Rp.5.740.000</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-warning">Menunggu</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>20-Oktober-2021 09:40:50</td>
                                            <td>Beli</td>
                                            <td>
                                                Makanan Kucing</td>
                                            <td>
                                                Royal Canin Hair & SKin</td>
                                            <td>Rp.308.000</td>
                                            <td>1</td>
                                            <td>Rp.308.000</td>
                                            <td>
                                                    <button class="btn btn-sm round btn-outline-success">Diterima</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>19-Oktober-2018 20:30:50</td>
                                            <td >Beli</td>
                                            <td>
                                                Reptil</td>
                                            <td>
                                                Kura Kura Brazil</td>
                                            <td>Rp.200.000</td>
                                            <td>2</td>
                                            <td>Rp.400.000</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success"> Diterima</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>19-Oktober-2021 13:51:51</td>
                                            <td>Jodoh</td>
                                            <td>
                                                Hewan Peliharaan</td>
                                            <td>
                                                Kucing Persia Asli</td>
                                            <td>Rp.35.000</td>
                                            <td>7</td>
                                            <td>Rp.245.000</td>
                                            <td>
                                                    <button class="btn btn-sm round btn-outline-success">Diterima</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18-Oktober-2021 11:30:40</td>
                                            <td>Jodoh</td>
                                            <td>
                                                Hewan Peliharaan</td>
                                            <td>
                                                Kucing Anggora Asli</td>
                                            <td>Rp.35.000</td>
                                            <td>7</td>
                                            <td>Rp.245.000</td>
                                            <td>
                                                    <button class="btn btn-sm round btn-outline-danger">Ditolak</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18-Oktober-2021 12:51:50</td>
                                            <td>Beli</td>
                                            <td>
                                                Burung</td>
                                            <td>
                                                Burung Love Bird</td>
                                            <td>Rp.840.000</td>
                                            <td>2</td>
                                            <td>Rp.1.680.000</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success">Diterima</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-13">
                    <div class="card">
                        <div class="header">
                            <h2>Dompetku</h2>
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
                            <div class="row clearfix">
                                <div class="col-5">
                                    <div class="sparkline-pie">6,8,4</div>
                                </div>
                                <div class="col-7">
                                    <h6 class="font700">Rp.7.550.000</h6>
                                    <span>Pemasukan<span class="float-right">Rp.9.440.000</span></span><br>
                                    <span>Event<span class="float-right">Rp.2.500.000</span></span><br>
                                    <span>Pengeluaran<span class="float-right">Rp.3.000.000</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-17">
                    <div class="card">
                        <div class="header">
                            <h2>Social Media</h2>
                        </div>
                        <div class="body social_counter">
                            <ul class=" list-unstyled basic-list">
                                <li><i class="fa fa-facebook-square m-r-5"></i> FaceBook <span class="badge badge-primary">16,785</span></li>
                                <li><i class="fa fa-twitter-square m-r-5"></i> Twitter <span class="badge-purple badge">2,365</span></li>
                                <li><i class="fa fa-instagram"></i> Instagram<span class="badge-success badge">9,021</span></li>
                            </ul>
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

<script src="assets/bundles/c3.bundle.js"></script>
<script src="assets/bundles/chartist.bundle.js"></script>
<script src="../assets/vendor/toastr/toastr.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>
