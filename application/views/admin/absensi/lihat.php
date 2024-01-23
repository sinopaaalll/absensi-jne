<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Absensi</h4>
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
                        <a href="<?= base_url('admin/absensi') ?>">Absensi</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a>Detail Absensi</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <h4 class="card-title">Detail Absensi</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?= base_url('admin/absensi') ?>" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?= $karyawan->nama ?></td>
                                        </tr>
                                        <tr>
                                            <td>No Handphone</td>
                                            <td>:</td>
                                            <td><?= $karyawan->telp ?></td>
                                        </tr>
                                    </table>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Awal</label>
                                                <input type="hidden" class="form-control" id="user_id_jne" value="<?= $karyawan->user_id_jne ?>">
                                                <input type="date" class="form-control" id="start">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Akhir</label>
                                                <input type="date" class="form-control" id="end">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="button" id="filterButton" class="btn btn-primary col-12">Lhat Absen</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                    </div>

                    <div class="card" id="card-hasil">
                        <div class="card-body" id="TotalAbsensi">
                            <!-- Hasil absensi akan ditampilkan di sini -->
                        </div>
                    </div>

                    <div class="card" id="card-hasil1">
                        <div class="card-body" id="filteredAbsensi">
                            <!-- Hasil absensi akan ditampilkan di sini -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>