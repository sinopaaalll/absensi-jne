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
                        <a>Karyawan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-6">

                                    <h4 class="card-title">Data Karyawan</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?= base_url('admin/karyawan/tambah') ?>" class="btn btn-primary">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="basic-datatables">
                                <thead>
                                    <tr>
                                        <th width="6%">No</th>
                                        <th>User ID JNE</th>
                                        <th>Nama</th>
                                        <th>No. Handphone</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($karyawan as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data->user_id_jne ?></td>
                                            <td><?= $data->nama ?></td>
                                            <td><?= $data->telp ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/karyawan/lihat/' . $data->id) ?>" class="btn btn-sm btn-info">Lihat</a>
                                                <a href="<?= base_url('admin/karyawan/edit/' . $data->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="<?= base_url('admin/karyawan/hapus/' . $data->id) ?>" class="btn btn-sm btn-danger btn-hapus">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>