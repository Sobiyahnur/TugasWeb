<?php include 'koneksi.php'; ?>
<center>	
<h2> Data Layanan</h2>
<table class= "table table-bordered table-responsive" width="100%">

     <thead class="bg-info">
	 <tr>
	 <th>Uang Elektronik</th>  
	 <th>Pembayaran</th> 
	 <th>Transfer</th> 
	 <th>Lainnya</th>
	 </tr>
	 </thead>
	 <tbody>
	 <?php
	 $no=1;
	 $result = mysqli_query($konek, "SELECT * FROM layanan_digital");
	 while ($data = mysqli_fetch_array($result)){
	    $no++;
	?>
	<tr>
	    <td><?php echo $data['uang_elektronik'];?></td>
		<td><?php echo $data['pembayaran'];?></td>
		<td><?php echo $data['transfer_dana'];?></td>
		<td><?php echo $data['layanan_lainnya'];?></td>
	</tr>
	<?php }?>
	</tbo   dy>
	</table>