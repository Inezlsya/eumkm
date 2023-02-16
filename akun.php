<?php
  error_reporting(0);
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-UMKM Bumi Reyog Ponorogo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Classy</label>
      <ul>
        <li><a class="active" href="home2.php">Home</a></li>
        <li><a href="#">SEBAGAI<i class="fas fa-caret-down"></i> </a>
          <ul>
            <li><a href="akun_pedagang.php">PEDAGANG</a></li>
          </ul>
        </li>
        <li><a href="akun.php">Akun</a></li>
        <li><a href="daftar_produk.php">Daftar TOKO</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    <link rel="stylesheet" href="DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css">

    <script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <div class="container">
  	<h1 style="text-align: center;"> Daftar Data Akun </h1>
  	<br>
    <table border="1" style="margin: auto;">
  		<thead>
  		<tr>
  			<th>No</th>
  			<th>Nama</th>
  			<th>Nomer Telepon</th>
        <th>E-mail</th>
       
  		</tr>
  	    </thead>
  	    <tbody>
  	    <?php
       function lolosRequired($nilai){
        return (bool) @$nilai;
       }
  	      $no=0;
  	      $result = mysqli_query($koneksi, "SELECT * FROM akun");
  	    while($row = mysqli_fetch_array($result)) {
  	    	$no++
  	    ?>
  	        <tr>
  	         <td><?php echo $no;?></td>
  	         <td><?php echo $row['nama'];?></td>
  	         <td><?php echo $row['no_tlp'];?></td>
  	         <td><?php echo $row['email'];?></td>
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
  </body>
</html>