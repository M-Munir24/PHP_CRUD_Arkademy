<html>
<head>
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <h1 class="display-4 mt-5">Tambah Product</h1>
    <a href="index.php">< Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table>
          
            <tr> 
                <td>Nama Produk</td>
                <td> :</td>
                <td><input class="form-control" type="text" name="nama_produk"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td> :</td>
                <td><textarea class="form-control" type="text" name="keterangan"></textarea></td>
            </tr>
             <tr> 
                <td>harga</td>
                <td> :</td>
                <td><input class="form-control" type="text" name="harga"></td>
            </tr>

            <tr> 
                <td>jumlah</td>
                <td> :</td>
                <td><input class="form-control" type="text" name="jumlah"></td>
            </tr>
            
            <tr> 
                <td></td>
                <td></td>
                <td><button type="submit" class="btn btn-success btn-sm btn-block" name="Submit">Submit</button></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_produk = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        

        // include database connection file
        include_once("./config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES('$nama_produk','$keterangan','$harga','$jumlah')");

        // Show message when user added
        // echo "User added successfully. <a href='index.php'>View Produk</a>";
        header("Location:index.php");

        
    }
    ?>
</body>
</html>
