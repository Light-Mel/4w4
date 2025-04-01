<?php 
get_header();
$introuvable_img = get_theme_mod('erreur_image', 'Default Title');
?>
  <!-- <h4>404.php</h4> -->
    <section style="background-image: url(<?php echo($introuvable_img) ?>)">
        <div class="erreur404">
            <!-- Titre -->
            <div class="erreur404__titre">
                <h1>Oops, vous avez échoué sur l'île 404 !</h1>
            </div>

           <!-- Sous-titre -->
           <div class="erreur404__soustitre">
                <p>Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve 
                que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' 
                pour découvrir à nouveau nos voyages d’exception !</p>
           </div>
           
           <!-- Bouton pour retourner à l'accueil -->
           <a href="https://gftnth00.mywhc.ca/4w4_42/">
                <button class="hero__bouton erreur404__bouton">
                    Retour à l'accueil
                </button>
           </a>

           <!-- Menu -->
           <div class="erreur404__suggestions">
                <?php wp_nav_menu(array(
                    "menu"=> "menuSuggestions",
                    "container" => "nav",
                    "container_class" => "erreur404__menuSuggestions"
                )); ?>
           </div>

           <!-- Barre de recherche -->
           <div class="entete__recherche">
                    <?php get_search_form() ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>