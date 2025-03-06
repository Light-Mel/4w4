<!-- format du footer -->

<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
         
                <?php wp_nav_menu(array(
                    "menu"=> "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
    

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse">
                  <p class="piedpage__s1__coord">
                    Arik Malenfant-Lacombe
                  </p>
                  <p class="piedpage__s1__coord">
                      2901 rue Sherbrooke E, 123-456-7899 info@cmaisonneuve.qc.ca
                  </p> 
                  <div class="piedpage__s1__icone-app">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                  </div>  
                </div>

                <div class="piedpage__s1__adresse__recherche">
                  <?php get_search_form() ?>
                </div>
            </div>

            <div class="piedpage__s1__description">
                Notre site comprends des microtransactions. Ne pas utiliser la barre de recherche tant que vous n'avez pas payé 50$ à Arik Malenfant-Lacombe. Requis pour chaque utilisation.
            </div>
        </section>
        
        <section class="piedpage__s2">
        </section>
    </div>
</footer>
<?php wp_footer() ?>