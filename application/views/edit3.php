<script>

    function required()
    {
        var  harga = document.getElementById("harga");

        var validasiAngka = /^[0-9]+$/;

        if(harga.value.match(validasiAngka)){
        }else{
            alert ("Nilai harus dalam bentuk angka");
            return false;
        }

        return true ;
    }


</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibl" content="IE=edge">
    <title>Ghif Store Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url()?>Teller/tampilhalamandepan_teller" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>GHIF </b>STORE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="navbar-custom-menu">
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <!-- search form -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header" style="color:white;">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>Kuota</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                                 </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>Kuota/tambahKuota"><i class="glyphicon glyphicon-record"></i> + Data Kuota </a></li>
                        <li><a href="<?php echo base_url()?>Kuota1/kuotaTseljuga"><i class="glyphicon glyphicon-record"></i> Data Simpati </a></li>
                        <li><a href="<?php echo base_url()?>Kuota2/kuotaXljuga"><i class="glyphicon glyphicon-record"></i> Data Xl</a></li>
                        <li><a href="<?php echo base_url()?>Kuota/kuotaIm3juga"><i class="glyphicon glyphicon-record"></i> Data Im3</a></li>
                        <li><a href="<?php echo base_url()?>Kuota5/tokenplnjuga"><i class="glyphicon glyphicon-record"></i> Data Token PLN </a></li>
                        <li><a href="<?php echo base_url()?>Kuota6/kuotasmartfrenjuga"><i class="glyphicon glyphicon-record"></i> Data Smartfren</a></li>
                        <li><a href="<?php echo base_url()?>Kuota4/kuotaxisjuga"><i class="glyphicon glyphicon-record"></i> Data Axis</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-usd"></i>
                        <span>Hutang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>Teller/frm_pembiayaan"><i class="glyphicon glyphicon-record"></i> + Data Hutang</a></li>
                        <li><a href="<?php echo base_url()?>Teller/tampil_pembiayaan"><i class="glyphicon glyphicon-record"></i>  Lunas</a></li>
                        <li><a href="<?php echo base_url()?>Teller/tampil_transaksi"><i class="glyphicon glyphicon-record"></i> Belum Lunas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Pegawai/logout">
                        <i class="glyphicon glyphicon-log-out"></i>
                        Sign Out
            <span class="pull-right-container">
            </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">Edit Kuota</h3></center>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body">
                        <center>
                            Ghif Store
                        </center>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <center>
                            We here when u need
                        </center>
                    </div>
                </div>
                <div class="box">
                </div>
                <div class="box">
                    <form class="form-horizontal" action="<?php echo base_url()?>Kuota3/edit" method="post" onsubmit="return required();">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="inputEmail3"
                                           name="id_edit" placeholder="isi" required="true" value="<?php echo $value->id ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Kuota</label>
                                <div class="col-sm-6">
                                    <select id="rencana_pembayaran_per" name="kuotaedit" class="form-control">
                                        <option value="simpati">simpati</option>
                                        <option value="im3">im3</option>
                                        <option value="xl">xl</option>
                                        <option value="bolt">bolt</option>
                                        <option value="3">3</option>
                                        <option value="axis">axis</option>
                                        <option value="garena">garena</option>
                                        <option value="steam">steam</option>
                                        <option value="token_pln">token pln</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Isi</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputEmail3"
                                           name="isiedit" placeholder="isi" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Waktu</label>
                                <div class="col-sm-6">
                                    <select id="rencana_pembayaran_per" name="waktuedit" class="form-control">
                                        <option value="24jam/30Hari">24jam/30Hari</option>
                                        <option value="24jam/60hari">24jam/60Hari</option>
                                        <option value="7 hari">24jam/7Hari</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Harga</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="harga"
                                           name="hargaedit" placeholder="harga" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-6">
                                    <select id="rencana_pembayaran_per" name="statusedit" class="form-control">
                                        <option value="open">Open</option>
                                        <option value="close">Close</option>
                                        <option value="gangguan">Gangguan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
</body>
</html>
