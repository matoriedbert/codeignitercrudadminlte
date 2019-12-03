<!DOCTYPE html>
<html>
<head>
	<title>CRUD Gen Mat</title>
</head>
<body>
	<center>
		<center><h1>tambah User</h1></center>
		<h3>Tambah data baru</h3>

<?php echo validation_errors(); ?>

	</center>
	<form action="<?php echo base_url(). 'user/prosestambah'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo set_value('alamat'); ?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo set_value('pekerjaan'); ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>