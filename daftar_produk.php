<?php
  error_reporting(0);
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>E-UMKM Bumi Reyog Ponorogo</title>
    <link rel="stylesheet" type="text/css" href="style7.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  </head>
  <body>
    <div class="dropdwn">
      <nav>
        <label>Classy</label>
        <ul>
          <li><a href="akun_pendagang.php">HOME</a></li>
          <li><a href="#">SEBAGAI<i class="fas fa-caret-down"></i> </a>
        <ul>
          <li><a href="akun_konsumen.php">Konsumen</a></li>
        </ul>
          </li>
          <li><a href="akun.php">AKUN</a></li>
          <li><a href="#">LOGOUT</a></li>
        </ul>
      </nav>
    </div>
    <section>
    <link rel="stylesheet" href="DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css">

    <script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <div class="container">
  	<h1 style="text-align: center;"> Daftar Data Produk </h1>
  	<br>
    <table border="1" style="margin: auto;">
  		<thead>
  		<tr>
  			<th>No</th>
  			<th>Nama</th>
  			<th>Nama Toko</th>
        <th>Alamat</th>
        <th>Nama Produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
  		</tr>
  	    </thead>
  	    <tbody>
  	    <?php
       function lolosRequired($nilai){
        return (bool) @$nilai;
       }
  	      $no=0;
  	      $result = mysqli_query($koneksi, "SELECT * FROM pengusaha");
  	    while($row = mysqli_fetch_array($result)) {
  	    	$no++
  	    ?>
  	        <tr>
  	         <td><?php echo $no;?></td>
  	         <td><?php echo $row['nama'];?></td>
  	         <td><?php echo $row['nama_toko'];?></td>
  	         <td><?php echo $row['alamat'];?></td>
  	         <td><?php echo $row['nama_produk'];?></td>
             <td><?php echo $row['deskripsi'];?></td>
             <td><?php echo $row['harga'];?></td>
  	        </tr>
  	    <?php } ?>
  	    </tbody>
  	</table>

    <script>
      $(document).ready(function() {
        $('#data').DataTable();
      } );
    </script>
  </div>
</section>
  </body>
</html>