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

                    <div style="margin-bottom: 5%;">
                        <div class="col col-md-6">
                        <fieldset class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-lg-2" style="text-align: left;">ID BARANG</label>
                                <div class="col-lg-6">
                                  <input type="text" id="id_barang" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2" style="text-align: left;">NAMA</label>
                                <div class="col-lg-6">
                                  <input type="text" id="nama_barang" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2" style="text-align: left;">QTY</label>
                                <div class="col-lg-6">
                                  <input type="number" min="0" id="qty_barang" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2" style="text-align: left;">HARGA</label>
                                <div class="col-lg-6">
                                  <input type="number" min="0" id="harga_barang" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8" style="text-align: right;">
                                  <input class="btn btn-lg btn-warning" type="button" value="ADD" id="btn" />
                                </div>
                            </div>
                        </fieldset>
                        </div>

                        <div class="col col-md-6">
                          
                              <table  style="margin-bottom: 2%;" class="table table-striped table-hover" id="data">
                                 <thead>
                                  <tr>
                                    <th style="width: 19%; word-wrap: break-word;">NAMA</th>
                                    <th style="width: 5%; text-align: center;">QTY</th>
                                    <th style="width: 10%;">HARGA</th>
                                    <th style="width: 10%;">TOTAL</th>
                                  </tr>
                                </thead>
                                <tfoot id="totals">
                                    <tr>
                                      <th colspan="3" class="total-ignore" style="font-size: 140%;">
                                        TOTAL
                                      </th>
                                      <th style="font-size: 140%;">Rp. </th>
                                    </tr>
                                </tfoot>
                                <tbody id="tb" class="tb1">
                                </tbody>
                              </table>
                        </div>
                    </div>

						  <!-- TABEL -->
						<?php //include('data_laporan.php'); ?>
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
 
function number_format (number, decimals, decPoint, thousandsSep) 
  { number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
    var n = !isFinite(+number) ? 0 : +number
    var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
    var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
    var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
    var s = ''
    var toFixedFix = function (n, prec) 
      { var k = Math.pow(10, prec)
        return '' + (Math.round(n * k) / k)
         .toFixed(prec) }
    // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
    if (s[0].length > 3) 
      { s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep) }
    if ((s[1] || '').length < prec) 
      { s[1] = s[1] || ''
        s[1] += new Array(prec - s[1].length + 1).join('0') }
    return s.join(dec)
  }
//=============================================================

$("body:not(tbody)").click(function(){$("tr").css("background-color", "");});

$(document).delegate("tbody > tr", "click", function(e) {
              $("tr").css("background-color", "");
              $(this).css("background-color", "#e7e7e7");
            });
//=============================================================

$('#tb').scrollTop($('#tb')[0].scrollHeight);



$(function() {
          $("#btn").click(function() {
            var x = $("#nama_barang").val();
            var y = $("#qty_barang").val();
            var z = $("#harga_barang").val();
            var L = parseInt(y) * parseInt(z);

            $("#tb").prepend("<tr><td class = 't1'>" + x + "</td> <td class ='t2'>" + y + "</td> <td class='t3'>" + z + "<td class='t4'>" + L + "</td></tr>");
            $("html, body").animate({ scrollTop: $("#tb").scrollTop() }, 1000);
          
            var totals = [];
            $('#tb').find('tr').each(function() {
              var $row = $(this);

              $row.children('td:last').each(function(index) {
                totals[index] = totals[index] || 0;
                totals[index] += parseInt($(this).text()) || 0;
              });
            })
            $('#totals th').not('.total-ignore').each(function(index) {
              $(this).text('Rp. '+number_format(totals[index], 0, ',', '.'));
              $('#ttl').val(totals[index]);
            });
          });
          $("#tb").on("click", "tr", function() {

            $(this).find("td").slice(1).prop("contenteditable", true);

          });

        });
//=============================================================


</script>


<style type="text/css">
tr {
  width: 100%;
  display: inline-table;
  table-layout: fixed;
}


.t1{
  width: 19%;
}
.t2{
  width: 5%;
  text-align: center;
}
.t3{
  width: 10%;
}

.t4{
  width: 10%;
}

table{
 height: 400px;              
 display: -moz-groupbox;   
}

tbody{
  overflow-y: scroll;      
  height: 300px;           
  width: 100%;
  position: absolute;
}
</style>