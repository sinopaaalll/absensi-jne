<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Karyawan</h4>
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
                        <a href="<?= base_url('admin/karyawan') ?>">Karyawan</a>
                    </li>
                    <li class=" separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a>Detail Karyawan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <h4 class="card-title">Detail Karyawan</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?= base_url('admin/karyawan') ?>" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body  ">
                            <table class="table table-hover ">
                                <tr>
                                    <th>User ID JNE</th>
                                    <td>:</td>
                                    <td><?= $karyawan->user_id_jne ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td><?= $karyawan->nama ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>:</td>
                                    <td><?= $karyawan->tempat_lahir ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>:</td>
                                    <td><?= date('d M, Y', strtotime($karyawan->tgl_lahir)) ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>:</td>
                                    <td><?= $karyawan->jk ?></td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>:</td>
                                    <td><?= $karyawan->agama ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>:</td>
                                    <td><?= $karyawan->alamat ?></td>
                                </tr>
                                <tr>
                                    <th>No Handphone</th>
                                    <td>:</td>
                                    <td><?= $karyawan->telp ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>