<?php include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($konek, "SELECT * FROM members WHERE id_pelanggan=$id");
while ($members_data = mysqli_fetch_array($result)) {
    $nama = $members_data['nama_pelanggan'];
    $point = $members_data['jumlah_point'];
    $harga = $members_data['potongan_harga'];
}

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $point = $_POST['point'];
    $potongan = $_POST['potongan'];
    $query = "UPDATE members SET  nama_pelanggan='$nama',jumlah_point='$point',potongan_harga='$potongan'WHERE id_pelanggan=$id";
    if (mysqli_query($konek, $query)) {
        header("Location: member.php");
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal Mengubah</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <center>
        <h2> Edit Data Member</h2>
    </center>

    <form class="row g-3" method="post">
        <div class="col-md-12">
            <label for="nama" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
        </div>
        <div class="col-md-12">
            <label for="point" class="form-label">Jumlah Point</label>
            <input type="text" class="form-control" id="point" name="point" value="<?php echo $point ?>">
        </div>
        <div class="col-md-12">
            <label for="potongan" class="form-label">Potongan Harga</label>
            <input type="text" class="form-control" id="potongan" name="potongan" value="<?php echo $harga ?>">
        </div>
        <div class="col-12 m-2">
            <input type="submit" class="btn btn-dark m-1" name="save" value="Update">
        </div>
    </form>
</body>

</html>