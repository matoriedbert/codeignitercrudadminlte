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
	<form method="POST" action="<?php echo base_url(); ?>user/proseshapus/<?php echo $tampil->id; ?>">
		Apakah anda yakin akan menghapus <?php echo $tampil->nama; ?>
		<input type="hidden" name="nama" value="<?php echo $tampil->nama; ?>">
		<input type="submit" name="proses" value="YA"> <a href="<?php echo base_url(); ?>user/">Batal</a>
	</form>
	<?php } ?>

					

</body>
</html>