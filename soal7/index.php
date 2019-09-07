<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<title>Tambah Data</title> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
  
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "data_barang";

$con = new mysqli($server, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ( isset($_POST["submit"]) ){

    $nama = $_POST['produk'];
    $kategori = $_POST['kategori'];

    mysqli_query($con, "insert into products values('', '$nama', '$kategori')");
 
}

?>

    <div class="container">
        <section class="content-header mt-3">
            <ol class="breadcrumb">
                <li class="active">Menambahkan Data Baru</li>
            </ol>
        </section>
        <form action="#" method="post">
            <div class="form-group col-md-6">
                <label for="produk"><b>Products</b></label>
                <input type="text" name="produk" id="produk" class="form-control">
            </div>
            <div class="form-group col-md-6">
            <label for="kategori"><b>Categori Name</b></label>
                <select class="form-control" name="kategori" id="kategori">
                  <option value=""></option>
                  <option value="1">Peralatan Mandi</option>
                  <option value="2">Mie Instant</option>
                  <option value="3">Olahan Daging</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-sm">
                <b> Submit </b>
            </button>
        </form>
    </div>
</body>
</html>
