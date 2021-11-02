<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">



<div id="wrapper">

    <div id="main-content" class="taskboard">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Papan Tugas</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Papan Tugas</li>
                    </ul>
                    <a href="Buat_Papan_Tugas_Baru.php" class="btn btn-sm btn-primary" title="">Buat Baru</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">

                <div class="col-lg-4 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h2>Perencanaan</h2>
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
                            <div class="dd" data-plugin="nestable">
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">
                                            <h6>Halaman Awal</h6>
                                            <p>MetShopPet's Ini melayani pembelian dan penjualan Hewan Peliharaan untuk anda.</p>
                                            <ul class="list-unstyled team-info m-t-20">                                                
                                                <li><img src="../assets/images/team/Catur.png" data-toggle="tooltip" data-placement="top" title="Catur" alt="Avatar"></li>
                                                <li><img src="../assets/images/team/Dedi.png" data-toggle="tooltip" data-placement="top" title="Dedi" alt="Avatar"></li>
                                                <li><img src="../assets/images/team/Farhan.png" data-toggle="tooltip" data-placement="top" title="Farhan" alt="Avatar"></li>
                                                <li><img src="../assets/images/team/Alif.png" data-toggle="tooltip" data-placement="top" title="Alif" alt="Avatar"></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            <h6>Rancangan Baru</h6>
                                            <p>Meningkatkan Kerja sama antar patner dalam perjodohan hewan.</p>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">
                                            <h6>Rincian Detail</h6>
                                            <p>Di MetShopPet's ini Sportif dan inovatif dalam bekerja.</p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card progress_task">
                        <div class="header">
                            <h2>Dalam Pengerjaan</h2>
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
                            <div class="dd" data-plugin="nestable">
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">
                                            <h6>Memperbarui Menu Beli </h6>
                                            <p>Memperbarui menu beli dikarenakan ada sistem yang eror pada saat melakukan pembelihan hewan.</p>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            <h6>Rapat</h6>
                                            <p>Pada Semua tim akan di adakan rapat pada 23 agustus 2021 pada jam 14.00 wib di ruang kantor.</p>
                                            <ul class="list-unstyled team-info m-t-20">                                                
                                                <li><img src="../assets/images/team/Catur.png" data-toggle="tooltip" data-placement="top" title="Catur" alt="Avatar"></li>
                                                <li><img src="../assets/images/team/Farhan.png" data-toggle="tooltip" data-placement="top" title="Farhan" alt="Avatar"></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card completed_task">
                        <div class="header">
                            <h2>Terselesaikan</h2>
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
                            <div class="dd" data-plugin="nestable">
                                <ol class="dd-list">                                   
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">                                        
                                            <h6>JPerbaikan pada sistem</h6>
                                            <p>sistem menu perjodohan sudah diperbaiki, jika masih ada kendala eror atau yang lain bisa hub CS kita.</p>
                                            <ul class="list-unstyled team-info m-t-20">
                                                <li><img src="../assets/images/team/Dedi.png" data-toggle="tooltip" data-placement="top" title="Dedi" alt="Avatar"></li>
                                                <li><img src="../assets/images/team/Alif.png" data-toggle="tooltip" data-placement="top" title="Alif" alt="Avatar"></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            <h6>Kegiatan pada pemasaran di komunitas pencinta hewan selesai</h6>
                                            <p>Akhirnya dengan kerja keras yang cukup kita bisa melewati kegiatan pada sore hari ini, dimohon kepada karyawan semuanya untuk istirahat yang cukup.</p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</div>

<!-- Add New Task -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add New Task</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Task no.">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Job title">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                            <textarea type="number" class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <select class="form-control show-tick m-b-10">
                            <option>Select Team</option>
                            <option>John Smith</option>
                            <option>Claire Peters</option>
                            <option>Ken Patrick</option>
                            <option>Cory Carter</option>
                            <option>Rochelle Barton</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label>Range</label>
                        <div class="input-daterange input-group" data-provide="datepicker">
                            <input type="text" class="form-control" name="start">
                            <span class="input-group-addon"> to </span>
                            <input type="text" class="form-control" name="end">
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/nestable/jquery.nestable.js"></script><!-- Jquery Nestable -->
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/ui/sortable-nestable.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
</body>
</html>
