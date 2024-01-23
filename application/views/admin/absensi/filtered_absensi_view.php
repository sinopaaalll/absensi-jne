<table class="table table-striped">
    <tr>
        <th>Tanggal</th>
        <th>Jam Masuk</th>
        <th>Jam Pulang</th>
        <th>Total Jam Kerja</th>
    </tr>
    <?php foreach ($absensi as $row) : ?>
        <tr>
            <td><?= date("d M, Y", strtotime($row['authDate'])); ?></td>
            <td><?= date("H:i:s", strtotime($row['authTime_in'])); ?></td>
            <td><?= date("H:i:s", strtotime($row['authTime_out'])); ?></td>

            <?php
            // Hitung selisih jam (jam keluar - jam masuk)
            $jamMasuk = strtotime($row['authTime_in']);
            $jamKeluar = strtotime($row['authTime_out']);
            $selisihJamDetik = $jamKeluar - $jamMasuk;
            $selisihJam = floor($selisihJamDetik / 3600);
            $selisihMenit = floor(($selisihJamDetik % 3600) / 60);
            ?>

            <td>
                <?= $selisihJam . " Jam " . $selisihMenit . " Menit" ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>