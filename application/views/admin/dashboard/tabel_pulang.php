<table class="table table-striped">
    <tr>
        <th>Nama</th>
        <th>Jam Pulang</th>
    </tr>
    <?php foreach ($absensi1 as $row) : ?>
        <tr>
            <td><?= $row['nama']; ?></td>
            <td><?= date("H:i:s", strtotime($row['authTime_out'])); ?></td>
        </tr>
    <?php endforeach; ?>
</table>