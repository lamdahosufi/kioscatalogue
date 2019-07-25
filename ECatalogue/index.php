<!DOCTYPE html>
<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


  <title>MTP</title>
  <meta charset="utf-8">
  <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
      <div class="row">

      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav"> 
                  <li class="active"><a href="index.php">
                    <span class="glyphicon glyphicon-list-alt"></span> &nbsp; Catalogue
                  </a></li>
                </ul>
                <ul class="nav navbar-nav">
                  <li><a href="laporan.php">
                    <span class="glyphicon glyphicon-paperclip"></span> &nbsp; Laporan
                  </a></li>
                </ul>
            </div>
          </div>
      </nav>

      						  <!-- TABEL -->
                          <div style="margin-left: 2%; margin-right: 2%; margin-bottom: 5%;" id="data">
                            <?php include('daftar_barang.php'); ?>
                          </div>
                    <!-- TABEL -->

      </div>
      <!-- FOOTER -->
      <div class="panel panel-default" align="center" style="margin-top: 5%; margin-bottom: 0%;">
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