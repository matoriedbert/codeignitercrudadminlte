<!-- sidebar menu: : style can be found in sidebar.less --><ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

    <?php 
    foreach($navigasimenu as $tampil){ 
    ?>
        <li><a href="<?php echo base_url("$tampil->url_navigasi"); ?>"><i class="fa <?php echo $tampil->gambar_navigasi ?>"></i> <span><?php echo $tampil->nama_navigasi ?></span></a></li>

    <?php 
    } 
    ?>   


<!--         <li><a href="#"><i class="fa fa-edit"></i> <span>Soal</span></a></li>
        <li><a href="#"><i class="fa fa-user"></i> <span>Peserta</span></a></li> -->
        <li><a href="#"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
        <li><a href="#"><i class="fa fa-edit"></i> <span>admin</span></a></li>


<!--         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="adminlte/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="adminlte/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li> -->

        
</ul>


      
    </section>
    <!-- /.sidebar -->

     </aside>