<?php
/**
 *  search.php, modele pour afficher les resultats de recherche
 */
?>
<?php get_header() ?>
<h4>search.php</h4>
    <section class="populaire">
        <div class="boite__flex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
             
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php echo wp_trim_words(get_the_excerpt(),50,"..."); ?></div>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>