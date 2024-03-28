<?php require 'header.html.php' ?>

<div class="container">
    <table class="table table-bordered border-primary table-striped my-4">
        <thead>
            <tr>
                <th>Date de l'événement</th>
                <th>Description de l'événement</th>
        </thead>
        <tbody>
            <?php foreach ($date as $indice => $dates) : ?>
                <tr>
                    <td><?= $dates['chronos'] ?></td>
                    <td><?= $dates['description'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require 'footer.html.php' ?>