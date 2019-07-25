<!DOCTYPE html>
<style type="text/css">
  html, body {
  height: 100%;
  margin: 0;
}
.wrapper {
  min-height: 100%;
  /* Equal to height of footer */
  /* But also accounting for potential margin-bottom of last child */
  margin-bottom: -50px;
}
#footer,
.push {
  height: 50px;
}
</style>
<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>


  <title>MTP</title>
  <meta charset="utf-8">
  <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
              <div class="wrapper">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">

                          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav"> 
                                <li><a href="index.php">
                                  <span class="glyphicon glyphicon-list-alt"></span> &nbsp; Data Barang
                                </a></li>
                              </ul>
                              <ul class="nav navbar-nav">
                                <li class="active"><a href="laporan.php">
                                  <span class="glyphicon glyphicon-paperclip"></span> &nbsp; Laporan
                                </a></li>
                              </ul>
                          </div>
                        </div>
                    </nav>

                    <div class="col col-md-12" style="text-align: left; margin-bottom: 3%;">
                         <button class="btn btn-default btn-md" id="openChart" style="margin-right: : 3%;">
                         	<span class="glyphicon glyphicon-stats"></span> &nbsp;Lihat Grafik 
                         </button> 
                    </div>
                    <div id="myChart" style="display: none;">
                        <div class="col col-md-6" style="margin-bottom: 5%;">
                          <?php include 'chart.php' ?>
                        </div>
                        <div class="col col-md-6" style="margin-bottom: 5%;">
                          INI GRAFIK
                        </div>
                    </div>

						  <!-- TABEL -->
						<?php include('data_laporan.php'); ?>
       			  <!-- TABEL -->
              <div class="push"></div>
              <br>
              </div>

<div class="panel panel-default" id="footer" align="center">
    <div class="panel-heading">Panel Heading</div>
          <div class="panel-body">
              <div class="col-md-4">
              <p>UADE Bisa</p>
              Lorem ipsum dolor <br>
              Napoleon Bonaparte <br>
              Svarg
              </div>
              <div class="col-md-4">
              UADE Bisa
              </div>
              <div class="col-md-4">
              UADE Bisa
              </div>
          </div>
    <div class="panel-footer" style="background-color: #000000; text-align: center;">UADE Bisa</div>
</div>


</body>
</html>

<script type="text/javascript">
  
$(document).ready(function(){
    $("#openChart").click(function(){
        if ($('#myChart').css('display') == 'none')
          { $('#myChart').show(250); $('#openChart').attr('class', 'btn btn-default btn-md disabled'); 
            setTimeout(function(){
              $('#openChart').attr('class', 'btn btn-default btn-md');}, 1000);
          }
        else
          { $('#myChart').hide(250);
            setTimeout(function(){
              $('#openChart').attr('class', 'btn btn-default btn-md');}, 500); }
    });
});   
</script>
