<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">



    <div id="wrapper">

   

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Buat Artikel Baru</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="app-contact.php">Kontak</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="input-daterange input-group">

                                <input type="text" class="form-control" placeholder="First Name" />
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" placeholder="Last Name" />
                            </div>
                        <div class="body">
                            <div class="form-group">
                            <p><input type="text" class="form-control" placeholder="Email" /></p>
                            <p><input type="text" class="form-control" placeholder="Nomer Hp/TLP " /></p>
                            <p><input type="text" class="form-control" placeholder="Alamat Rumah" /></p>
                            </div>
                        </div>
    
                    <div class="card">
                        <div class="header">
                            <h2>Gambar Sebelumnya <small>Bisa diganti gambar lainnya</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" id="dropify-event" data-default-file="">
                        </div>
                        <button type="button" class="btn btn-block btn-primary m-t-20">Tambah</button>
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

<script src="../assets/vendor/summernote/dist/summernote.js"></script>

</body>
</html>
