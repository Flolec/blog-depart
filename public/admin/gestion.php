<?php include   '../../inc/head.inc.php' ?>
<?php include   '../../inc/header.inc.php' ?>
<main class="centrage ">

    <h1>Gestion des Articles</h1>

    <a href="new.php" class="btn color-theme">Ajouter un article</a>
    <div class="box-alert color-danger">Erreur</div>
    <div class="box-alert color-success">Message de confirmation</div>
    <div class="modal">
        <div class="modal-content">
            <h2>Confirmer la suppression</h2>
            <p>Voulez-vous vraiment supprimer l'article X ? Cette action est irréversible.</p>
            <form method="post">
                <input type="hidden" name="id" value="">
                <button type="submit" name="confirm-delete" class="btn color-danger">Oui, supprimer</button>
                <a href="gestion.php" class="btn color-theme">Annuler</a>
            </form>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Vendée Globe : le Belge Denis Van Weynbergh est arrivé au bout de son rêve</td>
                <td>
                    <a href="new.php" class="btn color-theme">Modifier</a>
                    <a href="gestion.php" class="btn color-danger">Supprimer</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>« J’ai failli mourir » : les confidences de Cyprien Sarrazin après sa lourde chute </td>
                <td>
                    <a href="modifier_article.html" class="btn color-theme">Modifier</a>
                    <a href="gestion.php" class="btn color-danger">Supprimer</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Strade Bianche : voici les grands favoris à la victoire, Pogacar va-t-il se succéder à lui-même ? </td>
                <td>
                    <a href="modifier_article.html" class="btn color-theme">Modifier</a>
                    <a href="gestion.php" class="btn color-danger">Supprimer</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bonne nouvelle pour Laure Résimont</td>
                <td>
                    <a href="modifier_article.html" class="btn color-theme">Modifier</a>
                    <a href="gestion.php" class="btn color-danger">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>


<?php include  '../../inc/footer.inc.php' ?>