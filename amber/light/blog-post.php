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
                            <li class="breadcrumb-item active"><a href="blog-list.php">Artikel</li></a>
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
                                    <input type="text" class="form-control" placeholder="Tulis Judul Artikel" />
                                </div>
                                
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <option>Pilih Kategori Artikel</option>
                                        <option>Hewan Peliharaan</option>
                                        <option>Burung</option>
                                        <option>Ikan</option>
                                        <option>Kesehatan Hewan</option>
                                        <option>Vaksinasi Hewan</option>
                                    </select>
                                </div>
    
                        <div class="card">
                            <div class="header">
                                <h2>Masukan Gambar <small>yang berhubungan dengan artikel</small></h2>
                            </div>
                            <div class="body">
                                <input type="file" id="dropify-event" >
                            </div>
                        </div>   
    
    
                                <div class="summernote">
                              
                                    <h3 class="m-b-0">Halo dengan Admin,</h3>
                                    <h4 class="m-t-0">Hewan Peliharaan itu.</h4>
                                    <p></p>
                                </div>
                                <button type="button" class="btn btn-block btn-primary m-t-20">Posting</button>
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
