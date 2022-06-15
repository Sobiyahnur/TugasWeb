<?php include 'koneksi.php'; ?>
<center>	
<h2> Data Relasi</h2>
<table class= "table table-bordered table-responsive" width="100%">

     <thead class="bg-info">
	 <tr>
	 <th>NAMA </th>  
	 <th>Makanan</th> 
	 <th>Minuman</th> 
	 <th>Pembayaran</th>
	 <th>Transfer</th>
	 <th>HOT PROMO</th>

	 </tr>
	 </thead>
	 <tbody>
	 <?php
	 $no=1;
	 $result = mysqli_query($konek, "SELECT * FROM tampil 
	 	INNER JOIN members on tampil.id_pelanggan = members.id_pelanggan
	 	INNER JOIN promo on tampil.promo_jsm = promo.promo_jsm
	 	INNER JOIN layanan_digital on tampil.uang_elektronik = layanan_digital.uang_elektronik
	 	INNER JOIN produk_kami on tampil.makanan_ringan = produk_kami.makanan_ringan");
	 while ($data = mysqli_fetch_array($result)){
	    $no++;
	?>
	<tr>
	    <td><?php echo $data['nama_pelanggan'];?></td>
		<td><?php echo $data['makanan_ringan'];?></td>
		<td><?php echo $data['minuman'];?></td>
		<td><?php echo $data['pembayaran'];?></td>
		<td><?php echo $data['transfer_dana'];?></td>
		<td><?php echo $data['hot_promo'];?></td>
	</tr>
	<?php }?>
	</tbo   dy>
	</table>