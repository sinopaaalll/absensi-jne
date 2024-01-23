<table class="table table-striped">
    <tr>
        <th>Nama</th>
        <th>Jam Masuk</th>
    </tr>
    <?php foreach ($absensi as $row) : ?>
        <tr>
            <td><?= $row['nama']; ?></td>
            <td><?= date("H:i:s", strtotime($row['authTime_in'])); ?></td>
        </tr>
    <?php endforeach; ?>
</table>