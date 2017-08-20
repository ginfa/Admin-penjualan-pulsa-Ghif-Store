<div class="box-body no-padding">
    <table class="table table-striped">
        <tr>
            <th style="width: 10px">#</th>
            <th>Paket</th>
            <th>Komposisi</th>
            <th>Waktu</th>
            <th>Price</th>
            <th style="width: 40px">Status</th>
        </tr>
        <?php
        $id = 1;
        foreach ($tampilIm3->result() as $value) {
            ?>
            <tr>
                <td><?php echo $value->kuota; ?></td>
                <td><?php echo $value->isi; ?></td>
                <td><?php echo $value->waktu; ?></td>
                <td><?php echo $value->harga; ?></td>
                <td><?php echo $value->status; ?></td>
            </tr>
            <?php $id++;  } ?>
    </table>
</div>