<?php $this->load->view("template/ataslist.php") ?>
<?php $this->load->view("template/navigasi.php") ?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Navigasi
        <small>Tampil</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header with-border">
              <a href="<?php echo base_url("navigasi/tambah"); ?>" class="btn btn-info btn-sm">Tambah</a>

  <?php if ($this->session->flashdata('hapus')) { ?>
            <div class="alert alert-danger">
              <button class="close" data-dismiss="alert">x</button>
              <strong><?php echo $this->session->flashdata('hapus'); ?></strong>
            </div>
<?php   }elseif($this->session->flashdata('tambah')) { ?>
            <div class="alert alert-info">
              <button class="close" data-dismiss="alert">x</button>
              <strong><?php echo $this->session->flashdata('tambah'); ?></strong>
            </div>
<?php   }elseif($this->session->flashdata('edit')) { ?>
            <div class="alert alert-warning">
              <button class="close" data-dismiss="alert">x</button>
              <strong><?php echo $this->session->flashdata('edit'); ?></strong>
            </div>
<?php   }else{

        }
        ?>
            
            <!-- /.box-header -->
                      <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>url</th>
                  <th>gambar</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                   <?php 
    foreach($navigasi as $tampil){ 
    ?>
    <tr>
      <td><?php echo $tampil->nama_navigasi ?></td>
      <td><?php echo $tampil->url_navigasi ?></td>
      <td><?php echo $tampil->gambar_navigasi ?></td>
      <td>
        <a href="<?php echo base_url("navigasi/edit/$tampil->id_navigasi"); ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="<?php echo base_url("navigasi/hapus/$tampil->id_navigasi"); ?>" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
<?php } ?>
                  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view("template/bawahlist.php") ?>
