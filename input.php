<center><H1>FORM INPUT MAHASISWA</H1></center>
<form method="post">
<table border="0">
	
		<td>NIM :</td>
		<td><input type="text" name="nim"></td>
	</tr>
	<tr>
		<td>Nama :</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Tanggal : </td>
		<td><input type="date" name="tgl"></td>

	</tr>
	<tr>
		<td>Jenis Kelamin : </td>
		<td><select name="jk" >
				<option value="laki">Laki-Laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Prodi : </td>
		<td><select name="prodi">
				<option value="Manajemen_Informatika">Manajemen Informatika</option>
				<option value="Manajemen_Pemasaran">Manajemen Pemasaran</option>
				<option value="Teknik_Komputer">Teknik Komputer</option>
				<option value="Teknik_Informatika">Teknik Informatika</option>
				<option value="Teknik_Telekomunikasi">Teknik Telekomunikasi</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Fakultas : </td>
		<td><input type="radio" name="fakultas" value="fit">FIT
			<input type="radio" name="fakultas" value="feb">FEB
			<input type="radio" name="fakultas" value="fkb">FKB
			<input type="radio" name="fakultas" value="fif">FIF				
		</td>
	</tr>
	<tr>
		<td>Asal : </td>
		<td><input type="text" name="asal"></td>
	</tr>
	<tr>
		<tr>
		<td>Moto Hidup : </td>
		<td><textarea rows="2" cols="10" name="moto">

			</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>


<?php
session_start();
if(isset($_POST['submit'])){
$nim=$_POST['nim'];
$nama= $_POST['nama'];
$tgl=$_POST['tgl'];
$jk=$_POST['jk'];
$prodi=$_POST['prodi'];
$fakultas=$_POST['fakultas'];
$asal=$_POST['asal'];
$moto=$_POST['moto'];

$panjangnim=strlen($_POST['nim']);
$panjangnama=strlen($_POST['nama']);
$cek=true;
	if(empty($_POST['nim'])) {
		echo"nim harus diisi !!";
		$cek=false;
	}else if($panjangnim>10){
		echo"nim max 10 digit !!";
		$cek=false;
	}else{
		$nim=$_POST['nim'];
	}

	if(empty($_POST['nama'])) {
		echo"nama harus diisi !!";
		$cek=false;
	}else if($panjangnama>35){
		echo"nama max 35 digit!!";
		$cek=false;
	}else{
		$nama=$_POST['nama'];
	}

	$konek= mysqli_connect('localhost','root','','d_modul8');
	$sql = "INSERT INTO t_jurnal8 VALUES (
			'$nim' , '$nama' , '$tgl','$jk', '$prodi', '$fakultas', '$asal', '$moto'
			)";
	mysqli_query($konek , $sql);

	
	header("Location: table.php");
}
	

 
?>