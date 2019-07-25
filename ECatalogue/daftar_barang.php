
<table  style="margin-bottom: 2%;" class="table table-striped table-hover" id="data_table">
   <thead>
    <tr>
      <th style="text-align: center; width: 1%;">
        <a class="add  btn btn-default btn-md" href="#" id="tambah_data" data-toggle="modal" data-target="#mtambah">
          <span class="glyphicon glyphicon-plus"></span>
        </a>
      </th>
      <th style="width: 10%;">ID</th>
      <th style="width: 19%; word-wrap: break-word;">NAMA</th>
      <th style="width: 5%;">QTY</th>
      <th style="width: 10%;">HARGA</th>
      <th style="width: 10%; text-align: right;">TANGGAL</th>
      <th style="text-align: center; width: 10%;"><i class="glyphicon glyphicon-cog"></i></th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th style="text-align: center; width: 1%;"></th>
      <th style="width: 15%;">ID</th>
      <th style="width: 19%; word-wrap: break-word;">NAMA</th>
      <th style="width: 5%;">QTY</th>
      <th style="width: 10%;">HARGA</th>
      <th style="width: 10%; text-align: right;">TANGGAL</th>
      <th style="text-align: center; width: 10%;"><i class="glyphicon glyphicon-cog"></i></th>
    </tr>
  </tfoot>
  <tbody>

    <?php include "koneksi.php";
      $query = "SELECT * FROM data_barang ORDER BY tgl_add, nama_barang ASC";
      $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
      while($row = mysqli_fetch_array($result)){
        $id_barang    = $row['id_barang'];
        $nama_barang  = $row['nama_barang'];
        $harga_barang = $row['harga_barang'];
        $qty_barang   = $row['qty_barang'];
        $tanggal      = $row['tgl_add'];
      ?>
  <tr>
      <td></td>
      <th scope="row"><?php echo $id_barang; ?></th>
      <td><?php echo $nama_barang ?></td>
      <td><?php echo number_format($qty_barang, 0, '.', '.'); ?></td>
      <td><?php echo 'Rp. '.number_format($harga_barang, 0, '.', '.'); ?></td>
      <td style="text-align: right;"><?php echo date('d F Y',strtotime($tanggal)); ?></td>
      <td>
       <form class="form-horizontal" method="post" action="query_barang.php" style="text-align: center;">  
          <a class="add" href="#" data-toggle="modal" data-target="#mentry" 
             data-id      = "<?php echo $id_barang ?>" 
             data-nama    = "<?php echo $nama_barang; ?>"
             data-qty     = "<?php echo $qty_barang; ?>"
             data-harga   = "<?php echo $harga_barang; ?>"
             data-tanggal = "<?php echo date('d F Y',strtotime($tanggal)); ?>">
            <button class="btn btn-warning btn-sm" style="margin-right: 3%;">
              <span class="glyphicon glyphicon-pencil"></span>
              </button>  
           </a>
           <a>
              <button class="btn btn-danger btn-sm" style="margin-left: 3%;"onclick="return confirm('Anda yakin ingin menghapus <?php echo $id_barang; ?> ?');" style="margin-left: 3%;"><span class="glyphicon glyphicon-trash"></span></button>
              <input type="hidden" name="action" value="Hapus" >
              <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>"> 
           </a>
          
        </form>

      </td>
      </tr>
      <?php } ?>
      </tbody>
</table>



<!-- MODAL  -->

<div class="modal fade" id="mentry" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="modal-header"><font color="#F08519">
          <h4 style="text-align: center;"> <b class="modal-title" id="emodal"></b></h4>
        </font></div>

        <div class="modal-body">
        
            <div class="row">
               <!-- << PANEL KANAN | DATA BINDING >>  -->
                   <form class="form-horizontal" method="post" action="query_barang.php">
                   <fieldset class="form-horizontal">
                      <div class="form-group">
                          <label class="col-lg-4 control-label">NAMA</label>
                          <div class="col-lg-6">
                            <input type="text" name="nama_barang" class="form-control">
                            <input type="hidden" id="id_barang" name="id_barang" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-4 control-label">QTY</label>
                          <div class="col-lg-6">
                            <input type="number" min="0" name="qty_barang" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-4 control-label">HARGA</label>
                          <div class="col-lg-6">
                            <input type="number" min="0" name="harga_barang" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-4 control-label">TANGGAL</label>
                          <div class="col-lg-6">
                            <input type="date" max="<?php echo date("Y-m-d"); ?>" name="tanggal" class="form-control">
                          </div>
                      </div>
                          
                   </fieldset>
 <!-- BATAS PANEL KANAN | BATAS DATA BINDING -->
            </div>

        </div>

        <div class="modal-footer">

          <div class="text-center">
            <button type="reset" class="btn btn-default" data-dismiss="modal" style="margin-right: 3%;">Batal</button>
            <input type="submit" name="action" value="Entry" class="btn btn-warning btn-md" style="margin-left: 3%;">
          </div>
          
        </div>
                  </form>

      </div>
    </div>
  </div>



<script type="text/javascript">
  $('#mentry').on('show.bs.modal', function(e) {
    var id      = $(e.relatedTarget).data('id');
    var nama    = $(e.relatedTarget).data('nama');
    var qty     = $(e.relatedTarget).data('qty');
    var harga   = $(e.relatedTarget).data('harga');
    var tanggal = $(e.relatedTarget).data('tanggal');

    $(e.currentTarget).find('input[name="id_barang"]').val(id);
    $(e.currentTarget).find('input[name="nama_barang"]').val(nama);
    $(e.currentTarget).find('input[name="qty_barang"]').val(qty);
    $(e.currentTarget).find('input[name="harga_barang"]').val(harga);
    $(e.currentTarget).find('input[name="tanggal"]').val(tanggal);
    
    $('#emodal').html("[ "+id+" ]<br>"+nama);
});

$("body:not(tbody)").click(function(){$("tr").css("background-color", "");});

$(document).delegate("tbody > tr", "click", function(e) {
              $("tr").css("background-color", "");
              $(this).css("background-color", "#e7e7e7");
            });

//TABLE FILTER
// $("#search").keyup(function () {
//     var value = this.value.toLowerCase().trim();

//     $("#data tr").each(function (index) {
//         if (!index) return;
//         $(this).find("td").each(function () {
//             var id = $(this).text().toLowerCase().trim();
//             var not_found = (id.indexOf(value) == -1);
//             $(this).closest('tr').toggle(!not_found);
//             return not_found;
//         });
//     });
// });

//TABLE FUNCTION
$(document).ready( function () {

    $('#data_table').dataTable( {
        "columnDefs": [ {
            "targets": [0,6],
            "orderable": false
          } ]
      } ); 

    $('thead th:first').attr('class', 'sorting_disabled');

    $(this).find('select[name="data_length"]').attr('class', 'form-control col col-md-3');
    $(this).find('#data_length label').attr('class', 'col col-md-8');

    $(this).find('input[type="search"]').attr('class', 'form-control col col-md-5');
    $(this).find('#data_filter label').attr('class', 'col col-md-10');
    $(this).find('#data_filter label').attr('style', 'text-align: left;');

} );

</script>






<!-- MODAL  -->

<div class="modal fade" id="mtambah" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="modal-header">
          <h3 class="modal-title kode" style="text-align: center;">Tambah Barang</h3>
        </div>

        <div class="modal-body">
        
            <div class="row">
               <div><!-- << PANEL KANAN | DATA BINDING >>  -->
                   <form class="form-horizontal" method="post" action="query_barang.php">
                   <fieldset class="form-horizontal">

                      <div class="form-group">
                          <label class="col-md-4 control-label">ID BARANG</label>
                          <div class="col-md-6">
                            <input id="id_input" type="text" name="id_input" onkeyup="check_availability();" class="form-control" required>
                            <b id="id_info" class="text-danger"></b>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-4 control-label">NAMA</label>
                          <div class="col-lg-6">
                            <input type="text" name="nama_barang" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-4 control-label">QTY</label>
                          <div class="col-lg-6">
                            <input type="number" min="0" name="qty_barang" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-4 control-label">HARGA</label>
                          <div class="col-lg-6">
                            <input type="number" min="0" name="harga_barang" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-4 control-label">TANGGAL</label>
                          <div class="col-lg-6">
                            <input type="date" max="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>" name="tanggal" class="form-control">
                          </div>
                      </div>

                   </fieldset>

               </div> <!-- BATAS PANEL KANAN | BATAS DATA BINDING -->
            </div>

        </div>

        <div class="modal-footer">
          <div class="text-center">
            <button type="reset" class="btn btn-default" data-dismiss="modal" style="margin-right: 3%;">Batal</button>
            <input type="submit" id="submit" name="action" value="Tambah" class="btn btn-warning btn-md" style="margin-left: 3%;">
          </div>
        </div>
          </form>

      </div>
    </div>
  </div>


<script>
    $('.modal').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();
        $('#id_info').html('');
        $('#submit').attr('class', 'btn btn-warning btn-md'); 
          });

    $('#tambah_data').click(function(){
        $('.modal-body').find('#id_input').attr('autofocus', '');
          });

function check_availability()
        { //get the username  
          var id_input = $('#id_input').val();  

          $.post("check.php", { id_input: id_input },  
                  function(result)
                    {//if the result is 1  
                      if(result == 1)
                        { //show that the username is available  
                          $('#id_info').html('');
                          $('#submit').attr('class', 'btn btn-warning btn-md'); 
                          $('#submit').attr('type', 'submit'); 
                        }
                      else
                        { //show that the username is NOT available  
                          $('#id_info').html('Maaf, '+id_input+' sudah ada.');
                          $('#submit').attr('class', 'btn btn-warning btn-md disabled'); 
                          $('#submit').attr('type', 'button');                  
                        }  
                    })
        }   
</script>