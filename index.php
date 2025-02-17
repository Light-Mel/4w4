<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4W4 - Voyage</title>
  <link rel="stylesheet" href="/sass/normalize.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="entete">
      <figure class="entete__logo">
        <img src="http://localhost:81/4w4/wp-content/themes/4w4/images/logo.png" alt="logo de la compagnie" height="40" width="auto">
      </figure>
      <label for="chk__burger" class="burger">
        <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu" alt="bouton burger" width="32" height="32">
      </label>
      <input type="checkbox" id="chk__burger" class="chk__burger"> </input>
      <div class="entete__nav">
        <nav class="entete__menu">
          <ul class="menu">
            <li class="menu__li"><a class="menu__a" href="#">Sport</a></li>
            <li class="menu__li"><a class="menu__a" href="#">Plein nature</a></li>            
            <li class="menu__li"><a class="menu__a" href="#">Croisière</a></li>
            <li class="menu__li"><a class="menu__a" href="#">Aventure</a></li>
            <li class="menu__li"><a class="menu__a" href="#">Culture</a></li>
            <li class="menu__li"><a class="menu__a" href="#">Repos</a></li>
            <li class="menu__li"><a class="menu__a" href="#">Zen</a></li>
            <li class="menu__li"><a class="menu__a" href="#">Économique</a></li>
            <li class="menu__li"><a class="menu__a" href="#">Favorite</a></li>
            <li class="menu__li"><a class="menu__a" href="#">Pays</a></li>
          </ul>
        </nav>
        <div class="entete__recherche">
          <form class="recherche">
            <input type="text" class="recherche__input" onfocus="this.value=''" onblur="this.value='Recherche'"  value="Recherche">
            <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search" alt="" height="20" width="20">
          </form>
        </div>
      </div>
    </div>
  </header>
  <section class="hero">
    <div class="hero__contenu global">
      <h1 class="hero__titre">Voyagez autrement avec IHOP!</h1>
      <p class="hero__description">Découvrez des destinations uniques et inoubliables avec IHOP. Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et crées des souvenirs imérissables</p>
      <div class="hero__liens">
        <p class="hero__courriel">info@cmaisonneuve.qc.ca</p>
        <p class="hero__adresse">3800 rue Sherbrooke, Montréal</p>
        <p class="hero__telephone">514-254-7131</p>
        <button class="hero__bouton">Inscription</button>
      </div>
      <div class="hero__icone-app">
        <img src="https://s2.svgbox.net/materialui.svg?ic=facebook" alt="" height="20" width="20">
        <img src="https://s2.svgbox.net/social.svg?ic=instagram" alt="" height="20" width="20">
        <img src="https://s2.svgbox.net/social.svg?ic=paypal" alt="" height="20" width="20">
        <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow" alt="" height="20" width="20">
      </div>
    </div> 
  </section>

  <section class="galerie">
    <figure class="galerie__fig">
      <img src="" alt="">
    </figure>
  </section>
  
  <!-- <section class="promotion">
    <div class="carte carte--grande">
      <figure class="carte__image">
        <img src="" alt="">
      </figure>
      <div class="carte__contenu">
        <h2 class="carte__titre">Destination de rêve</h2>
        <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
        <button class="carte__bouton carte__bouton--actif">Réserver</button>
      </div>
    </div>  
  </section> -->
</body>
</html>