<?php include 'koneksi.php'; ?>
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
		<h2> Data Member</h2>
	</center>
	<a href="tambah_member.php">
		<button type="button" class="btn btn-primary">Tambah</button></a>
		<table class="table table-primary table-bordered " >
			<thead class="">
				<tr>
					<th>id_pelanggan</th>
					<th>nama_pelanggan</th>
					<th>jumlah_point</th>
					<th>potongan_harga</th>
					<th class="col-1">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$result = mysqli_query($konek, "SELECT * FROM members");
				while ($data = mysqli_fetch_array($result)) {
					$no++;
				?>
					<tr>
						<td><?php echo $data['id_pelanggan']; ?></td>
						<td><?php echo $data['nama_pelanggan']; ?></td>
						<td><?php echo $data['jumlah_point']; ?></td>
						<td><?php echo $data['potongan_harga']; ?></td>
						<td>
									<div class="btn-group" role="group" aria-label="Basic mixed styles example">
										<a href="edit_member.php?id=<?php echo $data['id_pelanggan'] ?>">
											<button type="button" class="btn btn-warning">Edit</button></a>
										<div class="btn-group" role="group" aria-label="Basic mixed styles example">
											<a href="delete_member.php?id=<?php echo $data['id_pelanggan'] ?>">
												<button type="button" class="btn btn-danger">Delete</button></a>
										</div>
								</td>
					</tr>
				<?php } ?>
				</tbody>
		</table>
	
</body>

</html>