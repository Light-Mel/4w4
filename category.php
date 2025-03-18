<?php
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page
 */
?>

<?php get_header() ?>
  <h4>category.php</h4>
    <section class="populaire">
        <div class="boite__flex global">
            <?php get_template_part("gabarit/carte"); ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>