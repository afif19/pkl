  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/dist/img/profile/') . $mahasiswa['image'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $mahasiswa['nama_mahasiswa']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

          <li <?= $this->uri->segment(1) == 'mahasiswa' || $this->uri->segment(1) == '' ? 'class = "active"' : ''
            ?>>
          <a href="<?= base_url('mahasiswa'); ?>"1>
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>

          <a href="<?= base_url('upload/lihatdata'); ?>">
        </li>
        
        <li <?= $this->uri->segment(1) == 'data_berkas' ? 'class = "active"' : ''
            ?>>
          <a href="<?= base_url('data_berkas'); ?>">
            <i class="fa fa-dashboard"></i> <span>Tugas Akhir</span>
          </a>
        </li>

        <li <?= $this->uri->segment(1) == 'PengajuanTugasAkhir' ? 'class = "active"' : ''
            ?>>
          <a href="<?= site_url('PengajuanTugasAkhir/index')?>">
            <i class="fa fa-book"></i> <span>Pengajuan Tugas Akhir</span>
          </a>
        </li>

        <li <?= $this->uri->segment(1) == 'TugasAkhir' ? 'class = "active"' : ''
            ?>>
          <a href="<?= site_url('TugasAkhir/index')?>"><i class="fa fa-book"></i> <span>List Tugas Akhir</span>
          </a>
        </li>

        <li <?= $this->uri->segment(1) == 'JadwalUjian' ? 'class = "active"' : ''
            ?>>
          <a href="<?= site_url('JadwalUjian/index')?>"><i class="fa fa-book"></i> <span>Jadwal Ujian</span>
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>