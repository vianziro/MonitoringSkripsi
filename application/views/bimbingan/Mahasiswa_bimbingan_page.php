<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitoring Skripsi</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/MonitoringSkripsi/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="http://localhost/MonitoringSkripsi/assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="http://localhost/MonitoringSkripsi/assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/MonitoringSkripsi/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://localhost/MonitoringSkripsi/assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/MonitoringSkripsi/assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
            <img src="http://localhost/MonitoringSkripsi/assets/header.png">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    
                </button>
                
            </div>
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form" style="color:#39F; text-align:center;">
                               <h3> Selamat Datang!</h3>
                            <h4><?php echo $this->session->userdata('Nama');?>
                            <br><?php echo $this->session->userdata('nim');?></h4>
                        </div>
                        
                        <!-- /input-group -->
                    </li>
                    <li>
                         <a href="http://localhost/MonitoringSkripsi/Mahasiswa"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
					 <li>
                         <a href="http://localhost/MonitoringSkripsi/data_topik/input"><i class="fa fa-dashboard fa-fw"></i> Usulan Topik</a>
                    </li>
                    
                    <li>
                       <a href="http://localhost/MonitoringSkripsi/Kuota/kuotatabel"><i class="fa fa-dashboard fa-fw"></i> Kuota Dosen Pembimbing</a>
                    </li>
                    
                         
                    <li>
                        <a href="<?php echo base_url();?>Bimbingan"><i class="fa fa-table fa-fw"></i> Bimbingan</a>
                    </li>
                    
                    <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                                               </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                      
                      
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Halaman Bimbingan Mahasiswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Silahkan Pilih
                        </div>
                        
                        <div class="panel-body">
                         <div class="col-lg-6">
                            <div class="row">
                          <form name="form1" method="post" action="http://localhost/MonitoringSkripsi/index.php/bimbingan/jenistabel">
                                            <label>Jenis Bimbingan</label>
                                            <select class="form-control" name="jenis">
                                            <option value="0">Semua Bimbingan</option>
   										    <option value="1">Bimbingan Proposal</option>
											<option value="2">Bimbingan Skripsi</option>
                                            </select><br>
                           <input value="submit" type="submit">
                                         </form>
                            </div></div></div>
                        </div>
                        
                        </div>
                        
                        </div>
                        
                        
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="http://localhost/MonitoringSkripsi/assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/MonitoringSkripsi/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://localhost/MonitoringSkripsi/assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://localhost/MonitoringSkripsi/assets/bower_components/raphael/raphael-min.js"></script>
    <script src="http://localhost/MonitoringSkripsi/assets/bower_components/morrisjs/morris.min.js"></script>
    <script src="http://localhost/MonitoringSkripsi/assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://localhost/MonitoringSkripsi/assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
