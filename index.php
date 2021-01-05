 <?php
include 'config.php';

 $result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC"); 

 ?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="./style.css" rel="stylesheet">
    <title>Halaman admin</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 mt-5">Arkademy CRUD Product</h1>
    <a class="btn btn-primary mb-3" data-toggle="collapse" href="add.php">Add Produk</a>
    <table class="table table-striped table-hover">

    <tr>
        <th>NO</th> 
        <th>Nama Produk</th>
        <th>Keterangan</th>
        <th>Harga</th> 
        <th>Jumlah</th>
        <th>Update</th>
    </tr>
    <?php  
    $no=0;
    while($user_data = mysqli_fetch_array($result)) {  
        $no++;       
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td width='250px'>".$user_data['nama_produk']."</td>";
        echo "<td>".$user_data['keterangan']."</td>"; 
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['jumlah']."</td>";  
        echo "<td width='150px'>
        <button type='button' class='btn btn-warning btn-sm'><a href='edit.php?id=$user_data[id]'>Edit</a></button>
        <button type='button' class='btn btn-danger btn-sm'><a href='delete.php?id=$user_data[id]'>Delete</a></button>
        </td>";
        echo "</tr>";        
    }
    ?>
    </table>
  </div>
</div>
</body>
</html>