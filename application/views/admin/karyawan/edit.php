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
                        <a>Edit Karyawan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <h4 class="card-title">Edit Karyawan</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?= base_url('admin/karyawan') ?>" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/karyawan/proses_edit/' . $karyawan->id) ?>" method="post" autocomplete="off">

                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">User ID JNE</label>
                                            <input type="text" name="user_id_jne" class="form-control" placeholder="Ketikkan User ID JNE ..." required readonly value="<?= $karyawan->user_id_jne ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Ketikkan nama ..." required value="<?= $karyawan->nama ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Ketikkan tempat lahir ..." required value="<?= $karyawan->tempat_lahir ?>">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Ketikkan nama ..." required value="<?= $karyawan->tgl_lahir ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <select name="agama" class="form-control" required>
                                                        <option value="" disabled>Pilih Agama</option>
                                                        <?php foreach ($agama as $key => $value) { ?>
                                                            <option value="<?= $value['name'] ?>" <?= $value['name'] == $karyawan->agama ? "selected" : "" ?>><?= $value['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <label>Gender</label><br>
                                                    <?php foreach ($jk as $key => $value) { ?>
                                                        <label class="form-radio-label">
                                                            <input class="form-radio-input" type="radio" name="jk" value="<?= $value['name'] ?>" <?= $value['name'] == $karyawan->jk ? "checked" : "" ?>>
                                                            <span class="form-radio-sign"><?= $value['name'] ?></span>
                                                        </label>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <textarea name="alamat" class="form-control" required><?= $karyawan->alamat ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No Handphone</label>
                                            <input type="number" name="telp" class="form-control" placeholder="Ketikkan no. hanphone ..." required value="<?= $karyawan->telp ?>">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Ubah</button>
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