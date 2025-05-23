<?php 
get_header();
$pays_img = get_theme_mod('templatePays_image', 'Default Title');
$pays_titre = get_theme_mod('templatePays_titre', 'Default Title');
$pays_soustitre = get_theme_mod('templatePays_texte', 'Default Title');
?>
  <!-- <h4>templatePays.php</h4> -->
    <section class="templatePays" style="background-image: url(<?php echo($templatePays_img) ?>)">
            <section class="templatePays__ImagesTextes">
            <div class="templatePays__lesTextes">
                <!-- Titre -->
                <div class="templatePays__titre">
                <h1><?php echo($pays_titre)?></h1>
                </div>

                <!-- Sous-titre -->
                <div class="templatePays__soustitre">
                <p><?php echo($pays_soustitre)?></p>
                </div>

                
                <div class="boite__flex global populaire pays">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if (in_category('pays')) {
                    the_content();
            
                    } ?>
                    <?php endwhile; endif; ?>
                </div>
            
            </div>
            </section>
            
            
            
          <!-- Menu -->
           <section class="templatePays__SectionMenu destination">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgb(190, 140, 200)" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,250.7C384,267,480,245,576,202.7C672,160,768,96,864,74.7C960,53,1056,75,1152,74.7C1248,75,1344,53,1392,42.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
           
           <div class="templatePays__SectionMenu__leMenu destination">
            <div>
                     <?php wp_nav_menu(array(
                    "menu"=> "menuPays",
                    "container" => "nav",
                    "container_class" => "templatePays__menuPays"
                )); ?>

                  <?php categories_liste("destination") ?>

            </div>
               
                    <p>Date: <?php the_field('date')?></p>
        <p>Heure: <?php the_field('heure')?></p>
        <p>Conférencier: <?php the_field('conferencier')?></p>
        <p>Coordonnées: <?php the_field('coordonnees')?></p>
           </div>

      
           
    </section>
    <?php get_footer(); ?>
</body>
</html>