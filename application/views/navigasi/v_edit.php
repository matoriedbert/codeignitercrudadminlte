 <?php $this->load->view("template/atas.php") ?>
<?php $this->load->view("template/navigasi.php") ?>
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Navigasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $judul; ?></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
              <?php foreach($navigasi as $tampil){ ?> 

          <form action="<?php echo base_url("navigasi/prosesedit/$tampil->id_navigasi"); ?>" method="post">

<input type="hidden" name="id_navigasi" value="<?php echo $tampil->id_navigasi; ?>">
            
            <input type="hidden" name="nama_navigasi_hidden" value="<?php echo $tampil->nama_navigasi; ?>">

<div class="form-group">
                  <label >Nama <?php echo $this->session->flashdata('nama_navigasi');?></label>
                  <input type="text" class="form-control" name="nama_navigasi" value="<?php echo $tampil->nama_navigasi; ?>">
                                    </div>

<div class="form-group">
                  <label >URL <?php echo $this->session->flashdata('url_navigasi');?></label>
                  <input type="text" name="url_navigasi" class="form-control" value="<?php echo $tampil->url_navigasi; ?>">
                                    </div>

<div class="form-group">
                  <label >Gambar</label>
                  <input type="text" name="gambar_navigasi" class="form-control" value="<?php echo $tampil->gambar_navigasi; ?>">
                                    </div>

      <input type="submit" value="Proses" name="proses" class="btn btn-warning">
      <a href="<?php echo base_url(); ?>navigasi/" class="btn btn-primary">Batal</a>

        <?php } ?>

  </form>
              </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Catatan : 
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view("template/bawah.php") ?>