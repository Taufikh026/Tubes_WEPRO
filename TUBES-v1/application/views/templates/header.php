<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wisatain Aja</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Modal -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
	
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</head>
    <style>
    .wisata{
        font-size: 37px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        color: black;
        font-family: monospace;
        font-size: 16px;
        text-align: left;
        }
        th {
        background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity));
        color: black;
        }
    </style>
    <?php 
        if(!$_SESSION['nama']){
            $_SESSION['nama'] = "";
        }if(!$_SESSION['status']){
            $_SESSION['status'] = "";
        }if(!$_SESSION['id_pengguna']){
            $_SESSION['id_pengguna'] = "";
        }if(!$_SESSION['status_user']){
            $_SESSION['status_user'] = "";
        }
    ?>
<body>
     <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area" style="background:#c5a600;">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3"  >
                            <div class="wisata" >
                                <a style="color:#ffffff;" href="ControllerIndex">Wisatain Aja
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a ><?= $_SESSION['nama']?></a></li>
                                        <li><a href="ControllerIndex">home</a></li>
                                        <li><a href="ControllerEvent_page">Event</a></li>
                                        <li><a href="ControllerContact">Contact</a></li>
                                        <li><a id="pesan" data-toggle="modal" data-target="#Pesan<?= $_SESSION['id_pengguna']?>" href="#">Pesanan</a></li>
                                        <li><a id="login" href="ControllerLogin">Login</a></li>
                                        <li><a id="logout" href="ControllerLogin/logout">logout</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn ">
                                        <a id="userpay" href="ControllerPay">Pay now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- header-end -->
    
    <!-- Modal -->
    <div class="modal fade" id="Pesan<?= $_SESSION['id_pengguna']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container table-responsive">
                        <table  border="1" class="text-center ">
                            <thead class="dt-head-right">	
                                <tr>
                                    <th class="col-sm text-center" style="width:5%;">NO</th>
                                    <th class="col-sm text-center" style="width:15%;">Customer</th>
                                    <th class="col-sm text-center" style="width:15%;">Tujuan</th>
                                    <th class="col-sm text-center" style="width:8%;">Harga</th>
                                    <th class="col-sm text-center" style="width:8%;">Jumlah</th>
                                    <th class="col-sm text-center" style="width:8%;">Total</th>
                                    <th class="col-sm text-center" style="width:10%;">Status</th>
                                    <th class="col-sm text-center">Tanggal</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                

                                foreach($tiket as $row): 
                                    $nama = "";
                                    foreach($user as $arr){
                                        if($arr->id === $row->id_user){
                                            $nama = $arr->nama;
                                        }
                                    }

                                    if($_SESSION['status_user'] === 'admin'){
                                ?>
                                <tr>
                                    <td class="row-sm"> <?= $no++ ?></td>
                                    <td class="row-sm"> <?= $nama?></td>
                                    <td class="row-sm"> <?= $row->nama ?> </td>
                                    <td class="row-sm"> <?= $row->harga_tiket ?></td>
                                    <td class="row-sm"> <?= $row->jumlah ?></td>
                                    <td class="row-sm"> <?= $row->jumlah * $row->harga_tiket ?></td>
                                    <td class="row-sm p-2"> 
                                        <?php
                                            if($row->status == "lunas"){
                                                echo "<a type='button' value='Edit' class='btn btn-success' >$row->status</a>";
                                            }else{
                                                echo"<a type='button' class='btn btn-danger'  >$row->status</a>";
                                            } 
								        ?>
                                    </td>
                                    <td class="row-sm"> <?= $row->tanggal ?></td>
                                    
                                    
                                </tr>
                            </tbody>
                                <?php }else{
                                    
                                    if($row->id_user === $_SESSION['id_pengguna']){?>
                                        
                                        <tr>
                                            <td class="row-sm"> <?= $no++ ?></td>
                                            <td class="row-sm"> <?= $nama ?></td>
                                            <td class="row-sm"> <?= $row->nama ?> </td>
                                            <td class="row-sm"> <?= $row->harga_tiket ?></td>
                                            <td class="row-sm"> <?= $row->jumlah ?></td>
                                            <td class="row-sm"> <?= $row->jumlah * $row->harga_tiket ?></td>
                                            <td class="row-sm p-2"> 
                                                <?php
                                                    if($row->status == "lunas"){
                                                        echo "<a type='button' value='Edit' class='btn btn-success' >$row->status</a>";
                                                    }else{
                                                        echo"<a type='button' class='btn btn-danger'  >$row->status</a>";
                                                    } 
                                                ?>
                                            </td>
                                            <td class="row-sm"> <?= $row->tanggal ?></td>
                                            
                                            
                                        </tr>
                                <?php } } endforeach?>
                               
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    