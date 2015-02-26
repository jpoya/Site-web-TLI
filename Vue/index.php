<!doctype html>
<html lang="fr">
<body>
<?php include("head.php"); ?>

<?php include("header.php"); ?>

<section class="mainContent">
    <h2>Accueil</h2>
    <p>Bla bla bla bla</p>
    <?php
        include ('../Modele/fctUtilisateur.php');
        $accessBDD = new fctUtilisateur;
        $accessBDD->connexion();
    ?>
</section>

<?php include("footer.php"); ?>

</body>

</html>