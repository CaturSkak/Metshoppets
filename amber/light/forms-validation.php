<?php include 'header.php'?>
<!doctype html>
<html lang="en">
<head>
    <style>
        
        </style>

<style>
body{
	font-family: arial, verdana, sans-serif;
}
/* jwpopup box style */
.jwpopup {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 110px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.7);
}
.jwpopup-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    max-width: 500px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

.jwpopup-head {
	font-size: 11px;
    padding: 1px 16px;
    color: white;
    background: #006faa; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#006faa, #002c44); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#006faa, #002c44); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#006faa, #002c44); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#006faa, #002c44); /* Standard syntax */
}
.jwpopup-main {padding: 5px 16px;}
.jwpopup-foot {
	font-size: 12px;
    padding: .5px 16px;
    color: #ffffff;
    background: #006faa; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#006faa, #002c44); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#006faa, #002c44); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#006faa, #002c44); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#006faa, #002c44); /* Standard syntax */
}

/* tambahkan efek animasi */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* style untuk tombol close */
.close {
	margin-top: 7px;
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover, .close:focus {
    color: #999999;
    text-decoration: none;
    cursor: pointer;
}
</style>

</head>
<body class="theme-orange">


<div id="wrapper">


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Daftar Perjodohan</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Produk</li>
                        <li class="breadcrumb-item active">Daftar Perjodohan</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-lg-16 col-md-16 col-sm-15">
                    <div class="card">
                        <div class="header">
                            <h2>Daftar Perjodohan</h2>
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
                        <li><a href="forms-basic.php" class="btn btn-sm btn-primary" title="">Tambah Perjodohan</a></li>
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
                                            <th>Deskripsi</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Anggora Asli</td>
                                            <td>Rp.35.000/Hari</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                          <!-- trigger the jwpopup -->
<a href="javascript:void(0);" id="jwpopupLink" class="btn btn-primary" ><i class="icon icon-info"></i></a>
<!-- jwpopup box -->
<div id="jwpopupBox" class="jwpopup">
	<!-- jwpopup content -->
	<div class="jwpopup-content">
		<div class="jwpopup-head">
			<span class="close">×</span>
			<h2>Deskripsi</h2>
		</div>
		<div class="card">
                        
                        <div class="body">
                           

                            <h6>Deskripsi</h6>
                            <blockquote >
                                 <!-- SKU Start -->
                            <div class="sku mb-3">
                            <span>Kategori</span>
                                <span>Hewan Peliharaan</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                        <div class="product-inventroy mb-3">
                            <span class="inventroy-title"> <strong>Info :</strong></span>
                            <span class="inventory-varient">Tersedia</span>
                     
                        <!-- Product Inventory End -->

                        <!-- Description Start -->
                        <p ><p>Kucing Persia Peaknose</p>
                        <p>Jantan</p>
                        <p>Umur 3-4 Bulan</p>
                        <p>No Kutu No Jamur</p>
                        <p>No Cacat</p>
                        <p>Obat Cacing Rutin</p>
                        <p>Linca Dan Pinter</p>
                        <p>Di Jamin Sehat, Sudah Vaksin</p>
                        <p>

Di Butuhkan Betina Jenis Kucing Persia Peaknose/Kucing Anggora/Kucing Persia Asli</p>


                        <p>Melayani Pengiriman Luar Kota Dan Dalam Kota</p>
                        <!-- Description End -->

                    </div>
                               
                    </blockquote>
                            
                            
                           
                       
                </div>
		
	</div>
</div>
                                            </td>
                                            <td>                                            

                                                <a href="forms-cropping.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Anggora Mix Persia</td>
                                            <td>Rp.30.000/Hari</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <!-- trigger the jwpopup -->
<a href="javascript:void(0);" id="jwpopupLink" class="btn btn-primary" ><i class="icon icon-info"></i></a>
<!-- jwpopup box -->
<div id="jwpopupBox" class="jwpopup">
	<!-- jwpopup content -->
	<div class="jwpopup-content">
		<div class="jwpopup-head">
			<span class="close">×</span>
			<h2>Deskripsi</h2>
		</div>
		<div class="card">
                        
                        <div class="body">
                           

                            <h6>Deskripsi</h6>
                            <blockquote >
                                 <!-- SKU Start -->
                            <div class="sku mb-3">
                            <span>Kategori</span>
                                <span>Hewan Peliharaan</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                        <div class="product-inventroy mb-3">
                            <span class="inventroy-title"> <strong>Info :</strong></span>
                            <span class="inventory-varient">Tersedia</span>
                     
                        <!-- Product Inventory End -->

                        <!-- Description Start -->
                        <p ><p>Kucing Persia Peaknose</p>
                        <p>Jantan</p>
                        <p>Umur 3-4 Bulan</p>
                        <p>No Kutu No Jamur</p>
                        <p>No Cacat</p>
                        <p>Obat Cacing Rutin</p>
                        <p>Linca Dan Pinter</p>
                        <p>Di Jamin Sehat, Sudah Vaksin</p>
                        <p>

Di Butuhkan Betina Jenis Kucing Persia Peaknose/Kucing Anggora/Kucing Persia Asli</p>


                        <p>Melayani Pengiriman Luar Kota Dan Dalam Kota</p>
                        <!-- Description End -->

                    </div>
                               
                    </blockquote>
                            
                            
                           
                       
                </div>
		
	</div>
</div>

                                            </td>
                                            <td>                                            

                                                <a href="forms-cropping.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Persia Asli</td>
                                            <td>Rp.35.000/Hari</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                             <!-- trigger the jwpopup -->
                                            <a href="javascript:void(0);" id="jwpopupLink" class="btn btn-primary" ><i class="icon icon-info"></i>fa</a>
                                         
<!-- jwpopup box -->
<div id="jwpopupBox" class="jwpopup">
	<!-- jwpopup content -->
	<div class="jwpopup-content">
		<div class="jwpopup-head">
			<span class="close">×</span>
			<h2>Deskripsi</h2>
		</div>
		<div class="card">
                        
                        <div class="body">
                           

                            <h6>Deskripsi</h6>
                            <blockquote >
                                 <!-- SKU Start -->
                            <div class="sku mb-3">
                            <span>Kategori</span>
                                <span>Hewan Peliharaan</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                        <div class="product-inventroy mb-3">
                            <span class="inventroy-title"> <strong>Info :</strong></span>
                            <span class="inventory-varient">Tersedia</span>
                     
                        <!-- Product Inventory End -->

                        <!-- Description Start -->
                        <p ><p>Kucing Persia Peaknose</p>
                        <p>Jantan</p>
                        <p>Umur 3-4 Bulan</p>
                        <p>No Kutu No Jamur</p>
                        <p>No Cacat</p>
                        <p>Obat Cacing Rutin</p>
                        <p>Linca Dan Pinter</p>
                        <p>Di Jamin Sehat, Sudah Vaksin</p>
                        <p>

Di Butuhkan Betina Jenis Kucing Persia Peaknose/Kucing Anggora/Kucing Persia Asli</p>


                        <p>Melayani Pengiriman Luar Kota Dan Dalam Kota</p>
                        <!-- Description End -->

                    </div>
                               
                    </blockquote>
                            
                            
                           
                       
                </div>
		
	</div>
</div>
                                            </td>
                                            <td>                                            

                                                <a href="forms-cropping.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Mainecoon</td>
                                            <td>Rp.55.000/Hari</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <button class="btn btn-primary js-sweetalert" data-type="with-title">CLICK ME</button>
                                            </td>
                                            <td>                                            

                                                <a href="forms-cropping.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Chihuahua</td>
                                            <td>Rp.75.000/Hari</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <button class="btn btn-primary js-sweetalert" data-type="with-title">CLICK ME</button>
                                            </td>
                                            <td>                                            

                                                <a href="forms-cropping.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Shiba Inu</td>
                                            <td>Rp.105.000/Hari</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <button class="btn btn-primary js-sweetalert" data-type="with-title">CLICK ME</button>
                                            </td>
                                            <td>                                            

                                                <a href="forms-cropping.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Alaskan Malamute</td>
                                            <td>Rp.305.000/Hari</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <button class="btn btn-primary js-sweetalert" data-type="with-title">CLICK ME</button>
                                            </td>
                                            <td>                                            

                                                <a href="forms-cropping.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         <div class="shop-top-bar-right">
                            <nav>
                            <center>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="shop-left-sidebar2.pph" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>





<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->

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
<script src="assets/js/pages/ui/dialogs.js"></script>


 <script>
	
    // untuk mendapatkan jwpopup
    var jwpopup = document.getElementById('jwpopupBox');
    
    // untuk mendapatkan link untuk membuka jwpopup
    var mpLink = document.getElementById("jwpopupLink");
    
    // untuk mendapatkan aksi elemen close
    var close = document.getElementsByClassName("close")[0];
    
    // membuka jwpopup ketika link di klik
    mpLink.onclick = function() {
        jwpopup.style.display = "block";
    }
    
    // membuka jwpopup ketika elemen di klik
    close.onclick = function() {
        jwpopup.style.display = "none";
    }
    
    // membuka jwpopup ketika user melakukan klik diluar area popup
    window.onclick = function(event) {
        if (event.target == jwpopup) {
            jwpopup.style.display = "none";
        }
    }
    
    </script>
</body>
</html>

