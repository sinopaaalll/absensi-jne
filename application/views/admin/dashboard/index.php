<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <!-- <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Tables</a>
                    </li>
                </ul> -->
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Tanggal</label>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-stats card-primary card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-users"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">ABSEN MASUK</p>
                                        <h4 class="card-title" id="total_masuk"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-stats card-primary card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-users"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">ABSEN PULANG</p>
                                        <h4 class="card-title" id="total_pulang"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Absen Masuk</h4>
                        </div>
                        <div class="card-body" id="absen_masuk">
                            <!-- Hasil absensi akan ditampilkan di sini -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Absen Masuk</h4>
                        </div>
                        <div class="card-body" id="absen_pulang">
                            <!-- Hasil absensi akan ditampilkan di sini -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>