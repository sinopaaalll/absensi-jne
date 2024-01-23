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
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a>Tambah Karyawan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <h4 class="card-title">Tambah Karyawan</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?= base_url('admin/karyawan') ?>" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/karyawan/proses_tambah') ?>" method="post" autocomplete="off">

                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">User ID JNE</label>
                                            <input type="text" name="user_id_jne" class="form-control" placeholder="Ketikkan User ID JNE ..." required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Ketikkan nama ..." required>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Ketikkan tempat lahir ..." required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Ketikkan nama ..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <select name="agama" class="form-control" required>
                                                        <option value="" selected disabled>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Buddha">Buddha</option>
                                                        <option value="Khonghucu">Khonghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <label>Gender</label><br>
                                                    <label class="form-radio-label">
                                                        <input class="form-radio-input" type="radio" name="jk" value="Laki-laki" checked="">
                                                        <span class="form-radio-sign">Laki-laki</span>
                                                    </label>
                                                    <label class="form-radio-label ml-3">
                                                        <input class="form-radio-input" type="radio" name="jk" value="Perempuan">
                                                        <span class="form-radio-sign">Perempuan</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <textarea name="alamat" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No Handphone</label>
                                            <input type="number" name="telp" class="form-control" placeholder="Ketikkan no. hanphone ..." required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>