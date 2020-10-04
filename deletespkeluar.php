<?php
include('koneksi.php');

if(isset($_GET['id'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$id = $_GET['id'];
	
$cek1 = mysqli_query($koneksi, "SELECT * FROM tb_spkeluar WHERE id='$id'") or die(mysqli_error($koneksi));
if(mysqli_num_rows($cek1) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del1 = mysqli_query($koneksi, "DELETE FROM tb_spkeluar WHERE id='$id'") or die(mysqli_error($koneksi));
		if($del1){
			echo '<script>alert("Berhasil menghapus data."); document.location="tabelagendab.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="tabelagendab.php";</script>';
		}
	}else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="tabelagendab.php";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="tabelagendab.php";</script>';
}
?>