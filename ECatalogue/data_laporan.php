

<table  style="margin-bottom: 2%;" class="table table-striped table-hover" id="data">
   <thead>
    <tr>
      <th style="text-align: center; width: 1%;"></th>
      <th style="width: 10%;">ID</th>
      <th style="width: 19%; word-wrap: break-word;">NAMA</th>
      <th style="width: 5%;">QTY</th>
      <th style="width: 10%;">HARGA</th>
      <th style="width: 10%; text-align: right;">TANGGAL</th>
      <th style="text-align: center; width: 1%;"></th>
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
      <th style="text-align: center; width: 1%;"></th>
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
      <th scope="row"><?php echo $id_barang; ?></td>
      <td><?php echo $nama_barang ?></td>
      <td><?php echo number_format($qty_barang, 0, '.', '.'); ?></td>
      <td><?php echo 'Rp. '.number_format($harga_barang, 0, '.', '.'); ?></td>
      <td style="text-align: right;"><?php echo date('d F Y',strtotime($tanggal)); ?></td>
      <td></td>
      </tr>
      <?php } ?>
      </tbody>
</table>

<script type="text/javascript">
  $("body:not(tbody)").click(function(){$("tr").css("background-color", "");});
  $(document).delegate("tbody > tr", "click", function(e) {
  $("tr").css("background-color", "");
  $(this).css("background-color", "#515960");
});


$(document).ready( function () {

    $('#data').dataTable( {
        "columnDefs": [ {
            "targets": [0, 6],
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

