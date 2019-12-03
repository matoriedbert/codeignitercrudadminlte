<!DOCTYPE html>
<html>
<head>
	<title>CRUD Gen Mat</title>
</head>
<body>
	<center>
		<center><h1>Edit User</h1></center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $tampil){ ?>
	<form action="<?php echo base_url(). 'user/prosesedit'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $tampil->id ?>">
					<input type="hidden" name="nama_hidden" value="<?php echo $tampil->nama ?>">
					<input type="text" name="nama" value="<?php echo $tampil->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $tampil->alamat ?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $tampil->pekerjaan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>