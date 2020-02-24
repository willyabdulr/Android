<?php
if ($_SEVER['REQUET_METHOD']=='POST'){
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$rombel = $_POST['rombel'];
	$rayon = $_POST['rayon'];

	$sql = "INSERT INTO tb_siswa VELUES ('$nis','$nama',$'rombel','$rayon')";

	requere_once('koneksi.php');

	   if(mysqli_query($con,$sql)){
	   	  echo 'Berhasil Menambahkan Data';
	   }else{
	   	echo "Gagal Menambahkan Data";
	   }
	   mysqli_close($con);
}
?>