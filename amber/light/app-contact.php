<?php include 'header.php'?>
<!doctype html>
<html lang="en">


<body class="theme-orange">



<div id="wrapper">



    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Kontak</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Kontak</li>
                    </ul>
                    <a href="app-contact.php" class="btn btn-sm btn-success" title=""><i class="fa fa-list"></i></a>
                    <a href="app-contact-grid.php" class="btn btn-sm btn-outline-success" title=""><i class="fa fa-th-large"></i></a>                    
                    <a href="buat_kontak_baru.php" class="btn btn-sm btn-primary">Buat Baru</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">                    
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive check-all-parent">
                                <table class="table table-custom table-hover m-b-0 c_list">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="fancy-checkbox">
                                                    <input class="check-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomer HP</th>                                    
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 50px;">
                                            <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/budi.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">(Karyawan) Budi Budiman</p>
                                            </td>
                                            <td>bubud890@gmail.com</td>
                                            <td>
                                                <span class="phone"><i class="fa fa-phone m-r-10"></i>+62-814-6225-2583</span>
                                            </td>                                   
                                            <td>
                                                <address><i class="fa fa-map-marker"></i>Jl.Imam Bonjol XII, No.12 ,Tulungagung </address>
                                            </td>
                                            <td>                                            
                                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/anastashia.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">(Pemasok) Anatashia Wina </p>
                                            </td>
                                            <td>anastashiawina2104@gmail.com</td>
                                            <td>
                                                <span class="phone"><i class="fa fa-phone m-r-10"></i>+62-8264-625-5689</span>
                                            </td>                                    
                                            <td>
                                                <address><i class="fa fa-map-marker"></i>Jl.Pattimura 20, No.32, Kediri</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/okta.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">(Sponsorship) Okta Wina</p>
                                            </td>
                                            <td>oktawina11@gmail.com</td>
                                            <td>
                                                <span class="phone"><i class="fa fa-phone m-r-10"></i>(067)-62595</span>
                                            </td>
                                            <td>
                                                <address><i class="fa fa-map-marker"></i>Jl.Sunan Ampel 1, No.212 , Probolinggo</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/abdul.jpeg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">(Karyawan) Abdul Sinaga</p>
                                            </td>
                                            <td>abdulsinaga@gmail.com</td>
                                            <td>
                                                <span class="phone"><i class="fa fa-phone m-r-10"></i>+62-8264-625-1212</span>
                                            </td>
                                            <td>
                                                <address><i class="fa fa-map-marker"></i>Jl.Riau , No.24.Jember</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/susi.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">(Pemasok) Susi Susanti</p>
                                            </td>
                                            <td>susisu@gmail.com</td>
                                            <td>
                                                <span class="phone"><i class="fa fa-phone m-r-10"></i>+62-8264-625-2323</span>
                                            </td>
                                            <td>
                                                <address><i class="fa fa-map-marker"></i>Jl.Sumatera, No.12,Jember</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/Eri.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">(Karyawan) Eri Budiono</p>
                                            </td>
                                            <td>eribudi@gmail.com</td>
                                            <td>
                                                <span class="phone"><i class="fa fa-phone m-r-10"></i>+62-8264-625-1005</span>
                                            </td>
                                            <td>
                                                <address><i class="fa fa-map-marker"></i>Jl.Sunan Ampel XII, No.25,Jember</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/Ani.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">(Sponsorship) Ani Sabrina</p>
                                            </td>
                                            <td>anisabi@gmail.com</td>
                                            <td>
                                                <span class="phone"><i class="fa fa-phone m-r-10"></i>(061)-462599</span>
                                            </td>
                                            <td>
                                                <address><i class="fa fa-map-marker"></i>Jl.Teguharjo 2, No.1 , Malang</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/beri.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">(Sponsorship) Beri Budi</p>
                                            </td>
                                            <td>beribudi@gmail.com</td>
                                            <td>
                                                <span class="phone"><i class="fa fa-phone m-r-10"></i>(032)-264625</span>
                                            </td>
                                            <td>
                                                <address><i class="fa fa-map-marker"></i>Jl.Teuku Umar 3, No.21, Batu</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Default Size -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Contact</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                            
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <hr>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Twitter">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Linkedin">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="instagram">
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

<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
</body>
</html>
