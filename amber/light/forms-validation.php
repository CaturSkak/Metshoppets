<?php include 'header.php'?>
<!doctype html>
<html lang="en">
<head>
    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css" />
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
                        <div class="body">
                       <a href="forms-basic.php" class="btn btn-sm btn-primary" title="">Tambah Perjodohan</a>
                        </div>
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
                                            <a  href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
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
                                            <a  href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
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
                                            <a  href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
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
                                        <a  href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
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
                                        <a  href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
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
                                        <a  href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
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
                                        <a  href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
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



   <!-- Modal Start  -->
   <div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    
                                <a class="swiper-slide w-100" href="assets/images/products/medium-product/persia.png">
                                    <img class="w-100" src="assets/images/products/medium-product/persia.png" alt="Product">
                                <a class="swiper-slide w-100" href="assets/images/products/medium-product/kucing_persia_putih_jantan.jpg">
                                    <img class="w-100" src="assets/images/products/medium-product/kucing_persia_putih_jantan.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="assets/images/products/medium-product/735_5.jpg">
                                    <img class="w-100" src="assets/images/products/medium-product/735_5.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="assets/images/products/medium-product/putih.jpg">
                                    <img class="w-100" src="assets/images/products/medium-product/putih.jpg" alt="Product">
                                </a>

                                
                                </div>

                                <!-- Swiper Pagination Start -->
                                <!-- <div class="swiper-pagination d-md-none"></div> -->
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="ti-arrow-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="ti-arrow-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery position-relative">

                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title">Kucing Persia Peaknose</h2>
                            </div>
                            <!-- Product Head End -->

                            

                            <!-- Price Box Start -->
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
                  

                       

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->



<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->

    
<!-- Plugins JS -->
<script src="assets/js/plugins/swiper-bundle.min.js"></script>

<!-- Vendor JS -->

<script src="assets/js/vendor/bootstrap.min.js"></script>
 <!--Main JS-->
 <script src="assets/js/main.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/advanced-form-elements.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>


 
</body>
</html>

