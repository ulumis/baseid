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
        <li class="active treeview">
          <a href="<?php echo base_url('saldo'); ?>">
            <i class="fa fa-money"></i>
            <span>Saldo</span>
          </a>
        </li>
        <li class="treeview">
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
                  <h3 class="box-title">Saldo Anda : <br></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
                  <br><br>
                    <div class="form-group">
                      <label class="col-sm-3 control-label text-right">Rp . </label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="saldo" value="<?php echo $this->session->userdata('saldo'); ?>" readonly>
                      </div>
                      <div class="col-sm-3">
                      </div>
                    </div>
                  <br><br>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->












    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->