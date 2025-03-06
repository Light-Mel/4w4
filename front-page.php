<?php
// modele front-page.php, affiche la page accueil
?>

<?php get_header() ?>
<h4>front-page.php</h4>
    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                Club de voyages IHOP
            </h1>
            <p class="hero__description">
                Avec IHOP, vous allez faire les plus beaux voyages de votre vie! Faites nous confiance, on vous en supplie...
            </p>
            <button class="hero__bouton">
                Inscription
            </button>
            <p class="hero__info-top">
                Arik Malenfant-Lacombe
            </p>
            <p class="hero__info">
                2901 Sherbrooke St E, 123-456-7899, info@cmaisonneuve.qc.ca
            </p>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
        </div>
    </section>
 
    <section class="populaire">
        <div class="boite__flex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (in_category('galerie')) {
              the_content();
            } else {?>

            <article class="carte carte--grande">
                <!-- <figure class="carte__image">
                    <img src="images/img1.jpg" alt="Image de voyage">
                </figure> -->
                <div class="carte__contenu">
                    <?php
                    if (has_post_thumbnail()) {
                        // permet d'afficher la petite image associé à l'article (image mise en avant)
                        the_post_thumbnail('thumbnail'); }
                    ?>
                    <h2 class="carte__titre"><?php the_title(); ?></h2>
                    <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
                    <a class="carte__bouton carte__bouton--actif"  href="<?php the_permalink(); ?>">Suite</a>
                    <?php the_category(); ?>
                    <p>Température minimale: <?php echo the_field("temperature_minimale");?> °C</p>
                    <p>Température maximale: <?php echo the_field("temperature_maximale");?> °C</p>
                </div>
            </article>

            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>