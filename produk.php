<?php include 'koneksi.php'; ?>
<center>	
<h2> Data Produk</h2>
<table class= "table table-bordered table-responsive" width="100%">

     <thead class="bg-info">
	 <tr>
	 <th>Makanan Ringan</th>  
	 <th>Minuman</th> 
	 <th>Make Up</th> 
	 <th>Kebutuhan Pokok</th>
	 </tr>
	 </thead>
	 <tbody>
	 <?php
	 $no=1;
	 $result = mysqli_query($konek, "SELECT * FROM produk_kami");
	 while ($data = mysqli_fetch_array($result)){
	    $no++;
	?>
	<tr>
	    <td><?php echo $data['makanan_ringan'];?></td>
		<td><?php echo $data['minuman'];?></td>
		<td><?php echo $data['make_up'];?></td>
		<td><?php echo $data['kebutuhan_pokok'];?></td>
	</tr>
	<?php }?>
	</tbo   dy>
	</table>