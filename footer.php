<!-- format du footer -->

<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
                <div class="piedpage__s1__menuRecherhe">
                <?php wp_nav_menu(array(
                    "menu"=> "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
                 <div class="piedpage__s1__adresse__recherche recherche__ordi">
                  <?php get_search_form() ?>
                </div>
                </div>
               
    

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse">
                  <p class="piedpage__s1__coord">
                    Mélanie Caillol
                  </p>
                  <p class="piedpage__s1__coord">
                      2901 rue Sherbrooke E<br> 123-456-7899<br> info@cmaisonneuve.qc.ca
                  </p> 
                  <div class="piedpage__s1__icone-app">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                  </div>  
                </div>

               
            </div>

            <div class="piedpage__s1__description">
                Si vous lisez ceci, il est déjà trop tard, nous possédons déjà votre numéro de carte de crédit et de sécurité sociale :]
            </div>

          
        </section>
        <div class="piedpage__s1__adresse__recherche recherche__cell">
                  <?php get_search_form() ?>
        </div>
        
        <section class="piedpage__s2">
        </section>
    </div>
</footer>
<?php wp_footer() ?>