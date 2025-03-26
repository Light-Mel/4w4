<?php 
get_header();
$introuvable_img = get_theme_mod('erreur_image', 'Default Title');
?>
  <!-- <h4>404.php</h4> -->
    <section>
        <div class="erreur404">
            <img class="erreur404__img" src="<?php echo($introuvable_img); ?>" alt="Recherche du contenu...">
           <h1 class="erreur404__titre">Erreur 404</h1>
           <hr class="erreur404__ligne">
           <h2>Bien tenté, mais la page que vous recherchez n'existe pas!</h2>
           <p>Veuillez vérifier s'il y a une faute d'orthographe dans votre recherche...</p>
           <a href="http://localhost:81/4w4/">
                <button class="hero__bouton erreur404__bouton">
                    Retour à l'accueil
                </button>
           </a>
           <div class="erreur404__suggestions">
           <p>Destinations que vous aimeriez peut-être :</p>
           <?php wp_nav_menu(array(
                    "menu"=> "menuSuggestions",
                    "container" => "nav",
                    "container_class" => "erreur404__menuSuggestions"
                )); ?>
           </div>
           
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>