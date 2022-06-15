<?php include 'koneksi.php'; ?>
<center>	
<h2> Data Promo</h2>
<table class= "table table-bordered table-responsive" width="100%">

     <thead class="bg-info">
	 <tr>
	 <th>PROMO JSM</th>  
	 <th>PROMO SERBA</th> 
	 <th>PROMO MEMBER</th> 
	 <th>HOT PROMO</th>
	 </tr>
	 </thead>
	 <tbody>
	 <?php
	 $no=1;
	 $result = mysqli_query($konek, "SELECT * FROM promo");
	 while ($data = mysqli_fetch_array($result)){
	    $no++;
	?>
	<tr>
	    <td><?php echo $data['promo_jsm'];?></td>
		<td><?php echo $data['promo_serba'];?></td>
		<td><?php echo $data['promo_member_only'];?></td>
		<td><?php echo $data['hot_promo'];?></td>
	</tr>
	<?php }?>
	</tbo   dy>
	</table>