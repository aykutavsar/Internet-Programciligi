<?php include "includes/header.php"; ?>

<table class="table table-hover table-dark" style="color:white">
    <thead>
        <tr>
            <th>Id</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>No</th>
            <th>Sınıf</th>
            <th>Eklenme Tarihi</th>
        </tr>
    </thead>
    <tbody><?php foreach ($items as $item) {
            ?>
            <tr>
                <td><?php echo $item->id ?></td>
                <td><?php echo $item->ad ?></td>
                <td><?php echo $item->soyad ?></td>
                <td><?php echo $item->ogrenciNo ?></td>
                <td><?php echo $item->sinif ?></td>
                <td><?php echo $item->createdAt ?></td>

            </tr><?php
                } ?>
    </tbody>
</table>

<?php include "includes/footer.php"; ?>