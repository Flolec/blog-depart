<?php include   '../../inc/head.inc.php' ?>
<?php include   '../../inc/header.inc.php' ?>

<main class="centrage boxOmbre">

    <h1>Nouvel Article</h1>
    <ul class="containerFlex">
        <li><i class="fa fa-arrow-left"></i> <a href="<?= BASE_URL ?>"> vers la liste des articles</a></li>
    </ul>
    <form action="new.php" method="post" class="formAdmin">
        <h2>Nouvel article</h2>

        <div class="box-alert color-success">
            message de confirmation
        </div>

        <div class="box-alert color-danger">
            <ul>
                <li>erreur</li>
            </ul>
        </div>
        <!-- Pour tester, les attributs required ont été enlevés +  maxlength="100"  -->
        <label for id="titre">Titre *<br><small>100 caractères max</small></label>
        <input type="text" size="50" id="titre" name="titre" value="">
        <label for id="contenu">Contenu *</label>
        <textarea name="contenu" id="contenu"></textarea>
        <input type="submit" class="btn btn-theme" name="btn_article" value="Ajouter">
    </form>
</main>
<?php include  '../../inc/footer.inc.php' ?>