      <ul class="sidebar-menu">
        <li class="header"><center>Aplikasi Bank Sampah Online</center></li>
        <li class="treeview">
          <a href="<?php echo base_url('home'); ?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="active treeview">
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
                  <h3 class="box-title">Pengaturan Akun</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url('akun/simpan/');echo $this->session->userdata('id'); ?>" method="post">
                <div class="form-horizontal">
                  <div class="box-body">
                  <br><br>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Username :</label>
                      <div class="col-sm-6">
                        <input type="text" name="username" class="form-control" value="<?php echo $this->session->userdata('username'); ?>">
                      </div>
                      <div class="col-sm-3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password :</label>
                      <div class="col-sm-6">
                        <input type="text" name="password" class="form-control" placeholder="Password Baru">
                      </div>
                      <div class="col-sm-3">
                      </div>
                    </div>
                    <br><br>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="col-sm-9">
                      <input type="submit" class="btn btn-success pull-right" value="Simpan">
                    </div>
                    <div class="col-sm-3">&nbsp</div>
                  </div><!-- /.box-footer -->
                </div>
                </form>
              </div><!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->