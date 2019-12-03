<!DOCTYPE html>
<html>
<head>
	<title>CRUD Gen Mat</title>
</head>
<body>
	<center><h1>Tampil User</h1></center>

				<?php if ($this->session->flashdata('hapus')) {
					echo $this->session->flashdata('hapus');
				}elseif($this->session->flashdata('tambah')) {
					echo $this->session->flashdata('tambah');
				}else{
					echo $this->session->flashdata('edit');
				}
				?>

	<center><?php echo anchor('user/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $tampil){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $tampil->nama ?></td>
			<td><?php echo $tampil->alamat ?></td>
			<td><?php echo $tampil->pekerjaan ?></td>
			<td>
			      <?php echo anchor('/user/edit/'.$tampil->id,'Edit'); ?>
                              <?php echo anchor('/user/hapus/'.$tampil->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>