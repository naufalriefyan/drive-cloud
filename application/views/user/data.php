<a href="<?= base_url('coba/tambah'); ?>" class="btn btn-primary">Tambah</a>


<table style="margin:20px auto; padding: 20px" border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>email</th>
        <th>Action</th>
    </tr>
    <?php $x = 1; ?>
    <?php foreach ($user as $us) : ?>
        <tr>
            <td><?= $x; ?></td>
            <td><?= $us['nama']; ?></td>
            <td><?= $us['email']; ?></td>
            <td>
                <a href="<?= base_url(); ?>coba/hapus/<?= $us['id']; ?>" class="btn btn-danger">Hapus</a>
                <a href="<?= base_url('coba/ubah'); ?>/<?= $us['id']; ?>" class="btn btn-success">Update</a>
            </td>
        </tr>
        <?php $x++; ?>
    <?php endforeach; ?>
</table>