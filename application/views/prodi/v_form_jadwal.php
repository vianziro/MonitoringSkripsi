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
                               <h3> Selamat Datang!
                                <br><br>PRODI
                                <br>081313222773</h3>
                            </div>
                            
                            <!-- /input-group -->
        
        <li><a href="daftar_mahasiswa.php">Mahasiswa</a></li>
          <li>  <a href="http://localhost/MonitoringSkripsi/data_jadwal/index"> Jadwal</a>
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
                    <h1 class="page-header">FORM JADWAL </h1>
                </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Jadwal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">

  
<div class="form-group">
     <label for="NIM">NIM</label>
     <select name="NIM" class="form-control" name="NIM" id="NIM" placeholder="<?php if ($type=="EDIT"){echo $skripsi[0]->NIM;};?>">  
	 <?php
$no = 1;

foreach($NIM as $value)
{
echo "<option>".$value->NIM."</option>";

if(isset($_GET['skripsi'])){
	if($_GET['skripsi']==$value->NIM){
		echo "<option selected>".$value->NIM."</option>";
	}
}
}
?>
     </select>
</div>
  
<div class="form-group">
<label>Jenis Sidang</label>
<select name="JenisSidang" class="form-control" name="JenisSidang" id="JenisSidang">
				  <option value="<?php if ($type=="EDIT"){echo $jadwal[0]->JenisSidang;};?>">Proposal</option>
				  <option value="<?php if ($type=="EDIT"){echo $jadwal[0]->JenisSidang;};?>">Skripsi</option>
      </select>
</div>
  
  	
<div class="form-group">
  <label>Tanggal </label>
   <input class="form-control" name="Tanggal" placeholder="<?php if ($type=="EDIT"){echo $jadwal[0]->Tanggal;};?>">
</div>

<div class="form-group">
  <label>Pukul</label>
   <input class="form-control" name="TanggalTopik" placeholder="<?php if ($type=="EDIT"){echo $jadwal[0]->Pukul;};?>">
</div>

<div class="form-group">
  <label>Tempat</label>
   <input class="form-control" name="TanggalTopik" placeholder="<?php if ($type=="EDIT"){echo $jadwal[0]->Tempat;};?>">
</div>
                    
<div class="form-group">
<label>Dosen Penguji 1</label>
<div class="">
<select name="NIK" class="form-control" name="NIK" id="NIK" placeholder="<?php if ($type=="EDIT"){echo $jadwal[0]->NIK;};?>">  
	 <?php
$no = 1;

foreach($NIK as $value)
{
echo "<option>".$value->Nama."</option>";

}
?>  
    </select>
</div>
</div>

<div class="form-group">
<label>Dosen Penguji 2</label>
<select name="NIK" class="form-control" name="NIK" id="NIK" placeholder="<?php if ($type=="EDIT"){echo $jadwal[0]->NIK;};?>">  
	 <?php
$no = 1;

foreach($NIK as $value)
{
echo "<option>".$value->Nama."</option>";

}
?>  
    </select>
</div>

  <input type="submit" name="simpan" value="<?php echo $type;?>">
</div>
             
				
                <!-- /.col-lg-12 --><!-- /.row -->
           
            <!-- /.row --><!-- /#page-wrapper --><!-- /#wrapper -->

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
