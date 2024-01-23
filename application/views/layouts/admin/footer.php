<footer class="footer">
    <div class="container-fluid">

        <div class="copyright ml-auto">
            Hak Cipta &copy; 2023. Dibuat oleh <a href="#">Egi Aria Putra</a>
        </div>
    </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url('assets') ?>/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('assets') ?>/js/core/popper.min.js"></script>
<script src="<?= base_url('assets') ?>/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url('assets') ?>/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('assets') ?>/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<!-- Sweet Alert -->
<script src="<?= base_url('assets') ?>/js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- jQuery Scrollbar -->
<script src="<?= base_url('assets') ?>/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url('assets') ?>/js/plugin/datatables/datatables.min.js"></script>
<!-- Atlantis JS -->
<script src="<?= base_url('assets') ?>/js/atlantis.min.js"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= base_url('assets') ?>/js/setting-demo2.js"></script>
<script>
    $(document).ready(function() {
        $("#basic-datatables").DataTable({});
    });
</script>
<script>
    $(document).ready(function() {

        // Menghentikan tautan dari navigasi langsung
        $('.btn-hapus').on('click', function(event) {
            event.preventDefault();
            var href = $(this).attr('href');

            // Menampilkan dialog konfirmasi SweetAlert
            swal({
                title: 'Yakin?',
                text: "Akan menghapus data ini secara permanen!",
                icon: 'warning',
                buttons: {
                    confirm: {
                        text: 'Yes, delete it!',
                        className: 'btn btn-success'
                    },
                    cancel: {
                        visible: true,
                        className: 'btn btn-danger'
                    }
                }
            }).then((willDelete) => {
                if (willDelete) {
                    // Jika pengguna mengkonfirmasi logout, arahkan ke URL logout
                    window.location.href = href;
                }
            });
        });

    });
</script>

<?php
if ($this->session->flashdata('success')) { ?>
    <script>
        var successMessage = <?php echo json_encode($this->session->flashdata('success')); ?>;
        $(document).ready(function() {
            swal("Selamat!", successMessage, "success");
        });
    </script>
<?php } else if ($this->session->flashdata('warning')) { ?>
    <script>
        var warningMessage = <?php echo json_encode($this->session->flashdata('warning')); ?>;
        $(document).ready(function() {
            swal("Oops!", warningMessage, "warning");
        });
    </script>
<?php } else if ($this->session->flashdata('error')) { ?>
    <script>
        var errorMessage = <?php echo json_encode($this->session->flashdata('error')); ?>;
        $(document).ready(function() {

            swal("Gagal!", errorMessage, "error");
        });
    </script>
<?php } ?>

<script>
    $(document).ready(function() {
        $("#card-hasil").hide();
        $("#card-hasil1").hide();
        // Fungsi untuk menangani perubahan pada input tanggal dan tombol filter
        $("#filterButton").on("click", function() {
            var startDate = $("#start").val();
            var endDate = $("#end").val();
            var userIdJne = $("#user_id_jne").val();

            // Validasi tanggal
            if (startDate === "") {
                swal("Oops!", "Tanggal harus di isi!", "warning");
                return;
            }

            $.ajax({
                url: "<?php echo base_url('admin/absensi/get_total_absensi'); ?>",
                type: "POST",
                data: {
                    start_date: startDate,
                    end_date: endDate,
                    user_id_jne: userIdJne
                },
                success: function(response) {
                    $("#card-hasil").show();
                    $("#TotalAbsensi").html(response);
                },
                error: function(error) {
                    console.log("Error:", error);
                }
            });

            // Lakukan AJAX request untuk mengambil data absensi
            $.ajax({
                url: "<?php echo base_url('admin/absensi/get_filtered_absensi'); ?>",
                type: "POST",
                data: {
                    start_date: startDate,
                    end_date: endDate,
                    user_id_jne: userIdJne
                },
                success: function(response) {
                    $("#card-hasil1").show();
                    $("#filteredAbsensi").html(response);
                },
                error: function(error) {
                    console.log("Error:", error);
                }
            });

        });
    });
</script>

<script>
    $(document).ready(function() {
        // Fungsi untuk menampilkan data dan menghitung total masuk
        function showDataAndTotalMasuk(tanggal) {
            // Panggil AJAX untuk menampilkan data absensi masuk
            $.ajax({
                url: "<?php echo base_url('admin/dashboard/get_data_absensi_masuk'); ?>",
                type: "POST",
                data: {
                    authDate: tanggal
                },
                success: function(response) {
                    $("#absen_masuk").html(response);

                    // Panggil fungsi untuk menghitung total masuk
                    calculateTotalMasuk(tanggal);
                },
                error: function(error) {
                    console.log("Error:", error);
                }
            });
        }

        function showDataAndTotalPulang(tanggal) {
            // Panggil AJAX untuk menampilkan data absensi masuk
            $.ajax({
                url: "<?php echo base_url('admin/dashboard/get_data_absensi_pulang'); ?>",
                type: "POST",
                data: {
                    authDate: tanggal
                },
                success: function(response) {
                    $("#absen_pulang").html(response);

                    // Panggil fungsi untuk menghitung total masuk
                    calculateTotalPulang(tanggal);
                },
                error: function(error) {
                    console.log("Error:", error);
                }
            });
        }

        // Fungsi untuk menghitung total masuk
        function calculateTotalMasuk(tanggal) {
            $.ajax({
                url: "<?php echo base_url('admin/dashboard/get_total_absensi_masuk'); ?>",
                type: "POST",
                data: {
                    authDate: tanggal
                },
                success: function(response) {
                    $("#total_masuk").empty();
                    $("#total_masuk").text(response);
                },
                error: function(error) {
                    console.log("Error:", error);
                }
            });
        }

        function calculateTotalPulang(tanggal) {
            $.ajax({
                url: "<?php echo base_url('admin/dashboard/get_total_absensi_pulang'); ?>",
                type: "POST",
                data: {
                    authDate: tanggal
                },
                success: function(response) {
                    $("#total_pulang").empty();
                    $("#total_pulang").text(response);
                },
                error: function(error) {
                    console.log("Error:", error);
                }
            });
        }

        const today = new Date();
        const yyyy = today.getFullYear();
        let mm = today.getMonth() + 1; // Months start at 0!
        let dd = today.getDate();

        if (dd < 10) dd = '0' + dd;
        if (mm < 10) mm = '0' + mm;

        const formattedToday = yyyy + '-' + mm + '-' + dd;
        tanggal = formattedToday;

        // Fungsi untuk menampilkan data dan menghitung total masuk saat halaman dimuat
        showDataAndTotalMasuk(tanggal);
        showDataAndTotalPulang(tanggal);

        // Fungsi untuk menangani perubahan pada input tanggal dan tombol filter
        $("#btn-filter").on("click", function() {
            var tanggal = $("#tanggal").val();
            if (tanggal == "") {
                const today = new Date();
                const yyyy = today.getFullYear();
                let mm = today.getMonth() + 1; // Months start at 0!
                let dd = today.getDate();

                if (dd < 10) dd = '0' + dd;
                if (mm < 10) mm = '0' + mm;

                const formattedToday = yyyy + '-' + mm + '-' + dd;
                tanggal = formattedToday;
            }

            // Panggil fungsi untuk menampilkan data dan menghitung total masuk
            showDataAndTotalMasuk(tanggal);
            showDataAndTotalPulang(tanggal);
        });
    });
</script>

</body>

</html>