
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--Script CSS-->
  <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>
  
</head>
<body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand">Unggah Berkas KKN</a>
    </div>
  </div>
</nav>
<br />
<br />
<form method=post action=upload.php enctype="multipart/form-data">
<table>
    <tr>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
          <input type="text" name="nim" class="form-control" size="4" required>
        </div>
      </div>
    </tr>
    <tr>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">NAMA</label>
        <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" size="4" required>
        </div>
      </div>
    </tr>
    <tr>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">PRODI</label>
        <div class="col-sm-10">
          <input type="text" name="prodi" class="form-control" size="4" required>
        </div>
      </div>
    </tr>
    <tr>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">ALAMAT</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" class="form-control" size="4" required>
        </div>
      </div>
    </tr>
    <tr>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">SURAT PERNYATAAN</label>
        <div class="col-sm-10">
          <input type="file" name="file1" required>
        </div>
      </div>
    </tr>
    <tr>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">SURAT PELATIHAN</label>
        <div class="col-sm-10">
          <input type="file" name="file2" required>
        </div>
      </div>
    </tr>
    <tr>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">BUKTI BAYAR</label>
        <div class="col-sm-10">
          <input type="file" name="file3" required>
        </div>
      </div>
    </tr>
    <tr>
        <td colspan=2>
        <input type='submit' value='SIMPAN' class="btn-primary"></td>
    </tr>
</table>
</form>

<br /><br />
<div class="form-group">

  <table id="example" class="display responsive nowrap" style="width:100%">
    <thead>
      <tr>  
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Surat Pernyataan</th>
        <th>Surat Pelatihan</th>
        <th>Bukti Bayar</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="alert-success">
      <?php
      require 'config.php';
      $row = $conn->query("SELECT * FROM file") or die(mysqli_error());
      $no = 1;
      while($fetch = $row->fetch_array()){
       ?>
       <tr>
        <?php 
        $suka = explode('/', $fetch['bukti_bayar']);
        ?>
        <td><?php echo $no?></td>
        <td><?php echo $fetch['nim']?></td>
        <td><?php echo $fetch['nama']?></td>
        <td><?php echo $fetch['prodi']?></td>
        <td><?php echo $fetch['alamat']?></td>
        <td><?php echo $fetch['surat_pernyataan']?></td>
        <td><?php echo $fetch['pelatihan']?></td>
        <td><?php echo $fetch['bukti_bayar']?></td>
        <td><a href="download.php?file=<?php echo $fetch['bukti_bayar']?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download Bukti Bayar</a></td>

      </tr>
      <?php
      $no++;
    }
    ?>
  </tbody>
</table>

</div>


<!--Script Javascript-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script>
 $(document).ready(function() {
  $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    'colvis'
    ]
  } );
} );
</script>
</body>
</html>