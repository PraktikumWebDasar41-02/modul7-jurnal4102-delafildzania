<?php 
$konek=mysqli_connect('localhost', 'root', '', 'd_modul8');
$result= mysqli_query ($konek, "SELECT * FROM t_jurnal8");        

?>  
<a href="input.php"><button>INPUT</button></a>
<form method="post">
<table border="1" cellpadding="10" cellspacing="0">
<tr>
	<td colspan="9"><input type="search" name="search">
		<input type="submit" name="submit" value="Cari">
		<?php
		if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {  

		  $search = $_POST['search'];  

		  $sql = mysql_query("SELECT * FROM t_jurnal8 WHERE nim LIKE '%$search%' ") or die(mysql_error());  

		    while ($res=mysql_fetch_array($sql)) {  

		      echo $res[nim].'<br>';  

	    	}  

			} 
			
				?>
	
	</td>
</tr>
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tanggal</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Moto Hidup</th>
		<th>Aksi</th>
	</tr>
	<?php while($row=mysqli_fetch_assoc($result) ) :?>
	<tr>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["tgl"]; ?></td>
		<td><?= $row["jk"]; ?></td>
		<td><?= $row["prodi"]; ?></td>
		<td><?= $row["fakultas"]; ?></td>
		<td><?= $row["asal"]; ?></td>
		<td><?= $row["moto"]; ?></td>
		
		<td>
			<?php echo "<a href=hapus.php?id=".$row["nim"].">Hapus</a>"; ?>

		</td>
	</tr>
<?php endwhile; ?>
</table>
</form>

<?php
if(mysqli_affected_rows($konek) >0){
		echo"berhasil ditambahkan";
}else{
		echo "gagal ditambahkan";
		echo "<br>";
		echo mysqli_error($konek);
	}
?>