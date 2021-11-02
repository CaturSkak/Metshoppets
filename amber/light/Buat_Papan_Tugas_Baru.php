<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">



    <div id="wrapper">

   

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Buat Papan Tugas Baru</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="app-taskboard.php">Papan Tugas</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Judul Pengerjaan" />
                            </div>
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <option>Pilih Team</option>
                                    <option>Team Random</option>
                                    <option>Team Burung</option>
                                    <option>Team Ikan</option>
                                    <option>Kijang 1</option>
                                    <option>Kijang 2</option>
                                </select>
                            </div>
                            <p>
                    <div class="col-12">
                        <label>Tanggal</label>
                        <div class="input-daterange input-group" data-provide="datepicker">
                            <input type="text" class="form-control" name="start">
                            <i class="fa fa-2x fa-arrows-h" aria-hidden="true"></i>
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="end">
                        </div>
                    </div>
                </p>
                            <p>
                            <div class="summernote">
                          
                                <h3 class="m-b-0">Halo dengan Admin,</h3>
                                <h4 class="m-t-0">Tulis Diskripsi pengerjaan nya.</h4>
                                <p></p>
                            </div>
                            <button type="button" class="btn btn-block btn-primary m-t-20">Tambah</button>
                        </p>
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


<script src="../assets/vendor/dropify/js/dropify.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/dropify.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="../assets/vendor/summernote/dist/summernote.js"></script>

</body>
</html>
