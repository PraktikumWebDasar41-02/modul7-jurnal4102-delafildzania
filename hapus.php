<?php
$konek=mysqli_connect('localhost', 'root', '', 'd_modul8');
$nim=$_GET['id'];
mysqli_query($konek, "DELETE FROM `t_jurnal8` WHERE `t_jurnal8`.`nim` = '$nim'") or die(mysql_error());
header("Location: table.php");
?>