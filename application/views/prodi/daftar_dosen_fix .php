<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Dosen</title>

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
                              <h3> Hai,
                                <br><br>Ridwan Kamil
                                <br>1987653442</h3> 
                            </div>
                            
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i> Mahasiswa</a>
                        </li>
                        
                             
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> Dosen</a>
                        </li>
                        
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
                    <h1 class="page-header">Daftar Dosen</h1>
                </div>
               <div class="col-md-8" style="text-align:center">
                                      
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Prodi</th>
                                            <th>Password</th>
                                            <th>Alamat</th>
                                             <th>Telepon</th>
                                             <th>Email</th>
                                             <th>KBK</th>
                                             <th>TahunAjar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ahmad Albar</td>
                                            <td>9111</td>
                                            <td>Sistem Informasi</td>
                                            <td>jgriaq</td>
                                            <td>Jalan Anggur 28 Surabaya</td>
                                            <td>0315991111</td>
                                            <td>ahmad_a@gmail.com</td>
                                            <td>RSI</td>
                                            <td>1995</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bunda Bi</td>
                                            <td>9922</td>
                                            <td>Sistem Informasi</td>
                                            <td>powqwa</td>
                                            <td>Jalan Bunga 99 Surabaya</td>
                                            <td>0315992222</td>
                                            <td>bunda_b@gmail.com</td>
                                            <td>Audit</td>
                                            <td>1996</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cindy Cin</td>
                                            <td>9993</td>
                                            <td>Sistem Informasi</td>
                                            <td>fjjia</td>
                                            <td>Jalan Coklat 73 Sidoarjo</td>
                                            <td>0315993333</td>
                                            <td>cindy_c@gmail.com</td>
                                            <td>SPK</td>
                                            <td>1996</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form name="form2" method="post" action="http://localhost/MonitoringSkripsi/index.php/Prodi_fix4/tambah_dosen_page">
  <input type="submit" name="tambahdosen" id="tambahdosen" value="Tambah Dosen">
</form>
                            </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
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
