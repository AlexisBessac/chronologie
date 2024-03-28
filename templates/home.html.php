<?php require 'header.html.php' ?>
    <div class="container my-4">
        <form action="" method="POST">
            <div class="mb-3">
                <div class="form-group">
                    <label for="date">Date de l'événement</label>
                    <input type="number" class="form-control" name="date" placeholder="Entrer une date d'un événement historique">
                </div>
                <?php if(isset($errors) && !empty($errors['date'])): ?>
                        <div class="invalid-feedback d-block">
                           <?= $errors['date'] ?>
                        </div>
                    <?php endif; ?>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="description">Description de l'événement</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Entrer la description de l'événement historique"></textarea>
                </div>
                <?php if(isset($errors) && !empty($errors['description'])): ?>
                        <div class="invalid-feedback d-block">
                           <?= $errors['description'] ?>
                        </div>
                    <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
        </form>
    </div>
<?php require 'footer.html.php' ?>