<?php
include 'koneksi.php';
    $id = $_GET['id'];
    $result = mysqli_query($konek, "DELETE FROM members WHERE id_pelanggan=$id");
    header("Location: member.php");
?>