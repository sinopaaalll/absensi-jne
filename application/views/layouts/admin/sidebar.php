<!-- Sidebar -->
<div class="sidebar sidebar-style-2">

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('assets/uploads/profile/' . $this->session->userdata('foto')) ?>" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" aria-expanded="true">
                        <span>
                            <?= $this->session->userdata('nama') ?>
                            <span class="user-level"><?= $this->session->userdata('username') ?></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>

            <ul class="nav nav-primary">
                <li class="nav-item <?= $this->uri->segment(2) == "dashboard" ? "active" : "" ?>">
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <!-- <span class="badge badge-success">4</span> -->
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data Master</h4>
                </li>
                <li class="nav-item <?= $this->uri->segment(2) == "karyawan" ? "active" : "" ?>">
                    <a href="<?= base_url('admin/karyawan') ?>">
                        <i class="fas fa-user-tie"></i>
                        <p>Data Karyawan</p>
                        <!-- <span class="badge badge-success">4</span> -->
                    </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(2) == "absensi" ? "active" : "" ?>">
                    <a href="<?= base_url('admin/absensi') ?>">
                        <i class="fas fa-check"></i>
                        <p>Data Absensi</p>
                        <!-- <span class="badge badge-success">4</span> -->
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>