      <ul class="sidebar-menu">
        <li class="header"><center>Aplikasi Bank Sampah Online</center></li>
        <li class="treeview">
          <a href="<?php echo base_url('home'); ?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('akun'); ?>">
            <i class="fa fa-user"></i>
            <span>Akun</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('saldo'); ?>">
            <i class="fa fa-money"></i>
            <span>Saldo</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="<?php echo base_url('laporan'); ?>">
            <i class="fa fa-book"></i>
            <span>Laporan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('bantuan'); ?>">
            <i class="fa fa-question-circle"></i>
            <span>Bantuan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('logout'); ?>">
            <i class="fa fa-power-off"></i>
            <span>Keluar</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      

      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $title; ?><br></h3>
        </div><!-- /.box-header -->
        <!-- form start -->
          <div class="box-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>No. Rekening</td>
                        <td>Kategori</td>
                        <td>Berat</td>
                        <td>Nominal</td>
                    </tr>
                </thead>
                <?php $no=0; foreach($isi as $row): $no++;?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $row['No_Rekening'];?></td>
                        <td><?php echo $row['Kategori'];?></td>
                        <td><?php echo $row['Berat'];?></td>
                        <td><?php echo $row['Nominal'];?></td>
                    </tr>
                <?php endforeach;?>
            </table>
          </div><!-- /.box-body -->
      </div><!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->