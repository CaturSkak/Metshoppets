<?php include 'header.php'?>
<!doctype html>
<html lang="en">

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

    

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Tambah Produk</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Basic Form</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
           
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2> Tambah Produk / Hewan </h2>
                        </div>
                        <div class="body">
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Ketegori</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Pilih Kategori</option>
                                    <option value="1">Hewan Peliharaan</option>
                                    <option value="2">Reptil</option>
                                    <option value="3">Ikan</option>
                                    <option value="4">Burung</option>
                                    <option value="5">Lain-Lain</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" placeholder="Nama Produk" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea class="form-control" placeholder="Deskripsi Produk / Hewan" aria-label="With textarea"></textarea>
                            </div>
                          
                            <li>
                            <div class="card">
                            <div class="header">
                                <h2>Masukan Gambar <small>Sesuai Produk / Hewan</small></h2>
                            </div>
                            <div class="body">
                                <input type="file" id="dropify-event" >
                            </div>
                            </div>
                                    </li>
                                <div class="mail-left">
                				<div class="mail-compose m-b-20">
                   	 				<a href="app-compose.php" class="btn btn-danger btn-block"> Tambah</a>
                				</div>		
                            </div>
                        </div>
                    </div>

                    <div class="body">
                    	<right>
                        <div class="header">
                            <h2>Tambah Perjodohan</h2>
                                 </div>
                        <div class="body">
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Ketegori</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Pilih Kategori</option>
                                    <option value="1">Hewan Peliharaan</option>
                                    <option value="2">Reptil</option>
                                    <option value="3">Ikan</option>
                                    <option value="4">Burung</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" placeholder="Nama Hewan" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" placeholder="Jenis Hewan" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            	<div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option value="1">Jantan</option>
                                    <option value="2">Betina</option>
                                </select>
                                </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea class="form-control" placeholder="Deskripsi Hewan" aria-label="With textarea"></textarea>
                            </div>
                            <li>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label> 
                                    </li>
                                <div class="mail-left">
                				<div class="mail-compose m-b-20">
                   	 				<a href="app-compose.php" class="btn btn-danger btn-block"> Tambah</a>
                   	 				</right>
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
    
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>


