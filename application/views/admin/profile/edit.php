<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Profile</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="<?= base_url('admin/dashboard') ?>">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a>Edit Profile</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-header" style="background-image: url('<?= base_url('') ?>/assets/img/blogpost.jpg')">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <img src="<?= base_url('assets/uploads/profile/' . $admin->foto) ?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name"><?= $this->session->userdata('nama') ?></div>
                                <div class="job"><?= $this->session->userdata('username') ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/profile/edit/' . $this->session->userdata('id')) ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $admin->nama ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?= $admin->username ?>" readonly required>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Password (Baru)</label>
                                            <input type="password" name="password" class="form-control" placeholder="Ketikkan password ...">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Konfirmasi Password</label>
                                            <input type="password" name="pass_conf" class="form-control" placeholder="Ketikkan konfirmasi password ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="hidden" name="old_foto" class="form-control" value="<?= $admin->foto ?>">
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submiit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>