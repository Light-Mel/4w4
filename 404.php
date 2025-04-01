<?php 
get_header();
$introuvable_img = get_theme_mod('erreur_image', 'Default Title');
$introuvable_titre = get_theme_mod('erreur_titre', 'Default Title');
$introuvable_soustitre = get_theme_mod('erreur_texte', 'Default Title');
?>
  <!-- <h4>404.php</h4> -->
    <section class="erreur404" style="background-image: url(<?php echo($introuvable_img) ?>)">
        <!-- <div class="erreur404"> -->
            <div class="erreur404__lesTextes">
                <!-- Titre -->
                <div class="erreur404__titre">
                <h1><?php echo($introuvable_titre)?></h1>
                </div>

                <!-- Sous-titre -->
                <div class="erreur404__soustitre">
                <p><?php echo($introuvable_soustitre)?></p>
                </div>
            </div>
            
           
           <!-- Bouton pour retourner à l'accueil -->
           <a href="https://gftnth00.mywhc.ca/4w4_42/">
                <button class="erreur404__bouton">
                    Retour à l'accueil
                </button>
           </a>

           <!-- Menu -->
           <div class="erreur404__leMenu">
                <?php wp_nav_menu(array(
                    "menu"=> "menuSuggestions",
                    "container" => "nav",
                    "container_class" => "erreur404__menuSuggestions"
                )); ?>
           </div>

           <!-- Barre de recherche -->
           <div class="erreur404__recherche">
                    <?php get_search_form() ?>
            </div>
        <!-- </div> -->
    </section>
    <?php get_footer(); ?>
</body>
</html>