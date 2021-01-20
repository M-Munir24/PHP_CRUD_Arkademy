<?php
// include database connection file
include_once("./config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
           
    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id='$id'");

    // Redirect to homepage to display updated user in list
    header("Location:index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id='$id'");

while($user_data = mysqli_fetch_array($result))
{
    $nama_produk = $user_data['nama_produk'];
        $keterangan = $user_data['keterangan'];
         $harga = $user_data['harga'];
           $jumlah = $user_data['jumlah'];
             
}
?>
<html>
<head>  
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
<h1 class="display-4 mt-5">Edit Product</h1>

    <a href="index.php">< Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
    
        <table>
        
            <tr> 
                <td>Nama Produk</td>
                <td><input class="form-control" type="text" name="nama_produk" value='<?php echo $nama_produk;?>'></td>
            </tr>
            
            <tr> 
                <td>Keterangan</td>
                <td><textarea class="form-control" type="text"  name="keterangan"><?php echo $keterangan;?></textarea></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input class="form-control" type="text" name="harga" value='<?php echo $harga;?>'></td>
            </tr>
           
             <tr> 
                <td>Jumlah</td>
                <td><input class="form-control" type="text"  name="jumlah" value='<?php echo $jumlah;?>'></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value='<?php echo $_GET['id'];?>'></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
