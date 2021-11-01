<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">



    <div id="wrapper">

   

        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Edit Daftar </h2>
                    </div>            
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active"><a href="forms-wizard.php">Edit Perjodohan</li></a>
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
                                    <select class="form-control show-tick">
                                        <option>Pilih Kategori</option>
                                        <option>Perjodohan Hewan</option>
                                        <option>Hewan Peliharaan</option>
                                        <option>Burung</option>
                                        <option>Ikan</option>
                                        <option>Lain-Lain</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Jenis Hewan / Produk" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Rincian" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Jumlah" />
                                </div>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>

    
                        <div class="card">
                            <div class="header">
                                <h2>Masukan Gambar <small>yang berhubungan dengan Hewan</small></h2>
                            </div>
                            <div class="body">
                                <input type="file" id="dropify-event" >
                            </div>
                        </div>   

                                    <textarea class="form-control" placeholder="Deskripsi" rows="5" cols="30" required></textarea>
                                <a href="forms-validation.php" button type="button"class="btn btn-block btn-primary m-t-20">Selesai</button></a>
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
