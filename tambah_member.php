<?php include 'koneksi.php';


if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $point = $_POST['point'];
    $potongan = $_POST['potongan'];
    echo $id,$nama,$point,$potongan;
    $query = "INSERT INTO members (id_pelanggan,nama_pelanggan,jumlah_point,potongan_harga) VALUES('$id','$nama','$point','$potongan')";
    if (mysqli_query($konek, $query)) {
        header("Location: member.php");
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal Menanmbah</div>";
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
        <h2> Tambah Data Member</h2>
    </center>

    <form class="row g-3" method="post">
    <div class="col-md-12">
            <label for="id" class="form-label">Id Pelanggan</label>
            <input type="number" class="form-control" id="id" name="id" value="">
        </div>
        <div class="col-md-12">
            <label for="nama" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama" name="nama" value="">
        </div>
        <div class="col-md-12">
            <label for="point" class="form-label">Jumlah Point</label>
            <input type="number" class="form-control" id="point" name="point" value="">
        </div>
        <div class="col-md-12">
            <label for="potongan" class="form-label">Potongan Harga</label>
            <input type="number" class="form-control" id="potongan" name="potongan" value="">
        </div>
        <div class="col-12 m-2">
            <input type="submit" class="btn btn-dark m-1" name="save" value="Tambah">
        </div>
    </form>
</body>

</html>