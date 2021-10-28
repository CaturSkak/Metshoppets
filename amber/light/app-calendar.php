<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">



<div id="wrapper">

    

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Kalender</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Kalender</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="" data-toggle="modal" data-target="#addevent">Buat Baru</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="text-center">
                                <img src="../assets/images/admin.jpg" class="rounded-circle m-b-15" alt="">
                                <div>
                                    <h4 class="m-b-0"><strong>Mimin</strong></h4>
                                    <span>Malang, Jawa Timur</span>
                                </div>
                                <div class="progress progress-xs m-b-25 m-t-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-4">
                                        <h6>17</h6>
                                        <span>Terselesaikan</span>
                                    </div>
                                    <div class="col-4">
                                        <h6>34</h6>
                                        <span>Dilakukan</span>
                                    </div>
                                    <div class="col-4">
                                        <h6>78</h6>
                                        <span>Semua Tugas</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <span class="badge badge-default mb-2">Pemasaran</span>
                            <span class="badge badge-primary mb-2">Penugasan Desain</span>
                            <span class="badge badge-success mb-2">Development</span>
                            <span class="badge badge-info mb-2">Keuangan</span>
                            <span class="badge badge-warning mb-2">Meeting</span>
                            <span class="badge badge-danger mb-2">Conference</span>
                            <hr>
                            <h6>Tim</h6>
                            <ul class="list-unstyled team-info m-t-20">                                
                                <li><img src="../assets/images/team/Catur.png" data-toggle="tooltip" data-placement="top" title="Catur" alt="Avatar"></li>
                                <li><img src="../assets/images/team/Dedi.png" data-toggle="tooltip" data-placement="top" title="Dedi" alt="Avatar"></li>
                                <li><img src="../assets/images/team/Farhan.png" data-toggle="tooltip" data-placement="top" title="Farhan" alt="Avatar"></li>
                                <li><img src="../assets/images/team/Alif.png" data-toggle="tooltip" data-placement="top" title="Alif" alt="Avatar"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Kegiatan Baru</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Tambah</button>
                <button type="button" class="btn btn-simple" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts --> 
<script src="../assets/vendor/fullcalendar/fullcalendar.js"></script><!--/ calender javascripts --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/calendar.js"></script>
</body>
</html>
