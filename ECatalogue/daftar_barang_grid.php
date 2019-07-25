
<fieldset class="form-horizontal" style="margin-bottom: 2%;">
	 <div class="form-group">
		 <label class="col-md-10 control-label">Cari : </label>
		 <div class="col-md-2">
		 	<input type="text" class="form-control" name="search" id="search" placeholder="Pencarian">
		 </div>
	 </div>
</fieldset>

<div class="row" id="no_res" style="text-align: center;"></div>

<?php 
include "koneksi.php";

$query = "SELECT * FROM data_barang ORDER BY tgl_add, nama_barang";

$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

while ($row = mysqli_fetch_array($result))
		{ $id_barang        = $row['id_barang'];
		  $nama_barang      = $row['nama_barang'];
		  $harga_barang     = $row['harga_barang'];
		  //$pic              = $row['gambar_mobil'];
		  //$kode_mobil       = $row['kode'];
		  //$kapasitas_mobil  = $row['kapasitas_mobil'];
      	  //$mobil_kembali    = $row['mobil_kembali'];
       
?>
    <div class="tbnail col-md-3" style="margin-bottom: 2%;">
			<table class="table table-bordered">
    			<thead>
      				<tr>
        				<th style="text-align: center;">
        					<a class="add" href="#" data-toggle="modal" data-target="#mentry" style="text-decoration:none;" 
					           data-id      = "<?php echo $id_barang ?>" 
					           data-nama    = "<?php echo $nama_barang; ?>"
					           data-harga   = "<?php echo $harga_barang; ?>"
					           data-tanggal = "<?php echo date('d F Y',strtotime($tanggal)); ?>">

        					<img src="http://www.joshuacasper.com/contents/uploads/joshua-casper-samples-free.jpg"
        						 style="max-width: 150px; max-height: 200px;">
        					
        					</a>
       					</th>        				
      				</tr>
    			</thead>
    			<tbody>
      				<tr>
        				<td><?php echo ' '.$nama_barang;  ?></td>        				
      				</tr>
      				<tr>
        				<td>
        					<div class="col-md-1"><span class="	glyphicon glyphicon-tags"></span></div>
        					<div class="col-md-10" style="font-weight: bold; color: #F08519">: 
        						&nbsp; Rp. <?php echo number_format($harga_barang, 0, '.', '.'); ?>
        					</div>
        				</td>
      				</tr>
    			</tbody>
  			</table>
    </div>

<?php } ?>



<!-- Modal -->
<div id="mentry" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <font color="#F08519">
          <h4 style="text-align: center;"> <b class="modal-title" id="emodal"></b></h4>
        </font>
      </div>

      <div class="modal-body">
      <div class="row">
      			<!-- PANEL KIRI -->
	      		<div class="col col-md-4">

						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" style="height: 300px;">
						    <div class="item active">
						      <img src="https://images-na.ssl-images-amazon.com/images/I/417m2wbG%2ByL.jpg" alt="Los Angeles">
						    </div>

						    <div class="item">
						      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqeLDH533VGRtzSuIvB2FMU21P_Xae3btrtnPOgONn1-md7iokAg" alt="Chicago">
						    </div>

						    <div class="item">
						      <img src="https://static.giantbomb.com/uploads/square_small/0/5911/2023886-552px_sonicchannel_silver.png" alt="New York">
						    </div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

	            </div>
	            <!-- PANEL KANAN -->
	            <div class="col col-md-8">
	               <h3>
	               		Lorem ipsum dolor sit amet, per ea veri sapientem. Detracto adipiscing reprimique vis no, id duo eius errem. Tantas suavitate usu at. Pri id sumo salutatus interesset, ne vix ludus legendos.
	               </h3>
	               <p>
						In idque iudicabit assentior per, eam ceteros expetendis et. Noster vivendum mel te, sit etiam bonorum in. Mea ad iusto fuisset, persius facilisi erroribus vim no. Purto eius accusamus ea ius. At populo numquam fabulas eos, sea et semper eripuit platonem. Usu omnis legere ridens at, in est diam menandri.
	               </p>
	            </div>

      </div>
      </div>

      <div class="modal-footer">
          <div class="text-center">
            <button type="reset" class="btn btn-default" data-dismiss="modal" style="margin-right: 3%;">Tutup</button>
            <input type="submit" name="action" value="Pesan" class="btn btn-warning btn-md" style="margin-left: 3%;">
          </div>
      </div>

    </div>

  </div>
</div>



<script type="text/javascript">
	//TABLE FILTER  var count = $("#some_id").find('img').length;

  $(document).ready(function () {
            $("#search").keyup(function () {
                _this = this;
                var result = 0;
                $.each(($('#data .tbnail')), function () {
                    if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) != -1)
                        {
                        	$(this).show();
                        	 result = 1;
                        }
                    else
                    	{
                    		$(this).hide();
                    	}

                });
                if (result == 0)  { $('#no_res').html('<h4>TIDAK ADA HASIL...</h4>'); } 
                else { $('#no_res').html(''); }
            });
        });

	//OPEN MODAL
  $('#mentry').on('show.bs.modal', function(e) {
    var id      = $(e.relatedTarget).data('id');
    var nama    = $(e.relatedTarget).data('nama');
    var harga   = $(e.relatedTarget).data('harga');
    var tanggal = $(e.relatedTarget).data('tanggal');

    // $(e.currentTarget).find('input[name="id_barang"]').val(id);
    // $(e.currentTarget).find('input[name="nama_barang"]').val(nama);
    // $(e.currentTarget).find('input[name="qty_barang"]').val(qty);
    // $(e.currentTarget).find('input[name="harga_barang"]').val(harga);
    // $(e.currentTarget).find('input[name="tanggal"]').val(tanggal);
    
    $('#emodal').html("[ "+id+" ]<br>"+nama);
});

</script>