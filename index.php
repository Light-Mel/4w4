<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP1 Arik M.-L.</title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="entete">
      <figure class="entete__logo">
        <img src="/4w4/wp-content/themes/TP1/images/logo.png" alt="logo de la compagnie" height="40" width="auto">
      </figure>
      
      <label for="chk__burger" class="burger">
        <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu" alt="bouton burger" width="32" height="32">
      </label>
      <input type="checkbox" id="chk__burger" class="chk__burger"> </input>
      <div class="entete__nav">
        <nav class="entete__menu">
          <ul class="menu">
            <li class="menu__li"><a class="menu__a" href="#">SPORT</a></li>
            <li class="menu__li"><a class="menu__a" href="#">PLEIN NATURE</a></li>            
            <li class="menu__li"><a class="menu__a" href="#">CROISIÈRE</a></li>
            <li class="menu__li"><a class="menu__a" href="#">AVENTURE</a></li>
            <li class="menu__li"><a class="menu__a" href="#">CULTUREL</a></li>
            <li class="menu__li"><a class="menu__a" href="#">REPOS</a></li>
            <li class="menu__li"><a class="menu__a" href="#">ZEN</a></li>
            <li class="menu__li"><a class="menu__a" href="#">ÉCONOMIQUE</a></li>
            <li class="menu__li"><a class="menu__a" href="#">FAVORITE</a></li>
            <li class="menu__li"><a class="menu__a" href="#">PAYS</a></li>
          </ul>
        </nav>
        <div class="entete__recherche">
          <form class="recherche">
            <input type="text" class="recherche__input" onfocus="this.value=''" value="Recherche">
            <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search" alt="" height="20" width="20">
          </form>
        </div>
      </div>
    </div>
  </header>
  <section class="hero">
    <div class="hero__contenu global">
      <h1 class="hero__titre">Voyagez autrement avec IHOP!</h1>
      <p class="hero__description">Découvrez des destinations uniques et inoubliables avec IHOP. Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et crées des souvenirs imérissables.</p>
      <div class="hero__liens">
        <p class="hero__courriel">info@cmaisonneuve.qc.ca</p>
        <p class="hero__adresse">3800 rue Sherbrooke, Montréal</p>
        <p class="hero__telephone">514-254-7131</p>
        <button class="hero__bouton">S'inscrire</button>
      </div>
      <div class="hero__icone-app">
        <img src="https://s2.svgbox.net/materialui.svg?ic=facebook" alt="" height="20" width="20">
        <img src="https://s2.svgbox.net/social.svg?ic=instagram" alt="" height="20" width="20">
        <img src="https://s2.svgbox.net/social.svg?ic=paypal" alt="" height="20" width="20">
        <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow" alt="" height="20" width="20">
      </div>
    </div> 
  </section>

  <section class="carte">
    <div class="carte--grande">
      <div class="entete__recherche">
        <h4 class="carte__contenu">Nom</h4>
          <input type="text" class="carte__input" onfocus="this.value=''" value="Nom">
      </div>
      <div class="entete__recherche">
        <h4 class="carte__contenu">Prénom</h4>
          <input type="text" class="carte__input" onfocus="this.value=''" value="Prénom">
      </div>
      <div class="entete__recherche">
        <h4 class="carte__contenu">Courriel</h4>
          <input type="text" class="carte__input" onfocus="this.value=''" value="Courriel">
      </div>
      <div class="entete__recherche">
        <h4 class="carte__contenu">Téléphone</h4>
          <input type="text" class="carte__input" onfocus="this.value=''" value="Téléphone">
      </div>
      <button class="carte__bouton">S'inscrire</button>
    </div>
  </section> 

  <section class="galerie">
    <div class="galerie__contenu">
        <h2 class="galerie__titre">Destinations de rêve</h2>
        <div class="galerie__images">
          <img src="/4w4/wp-content/themes/TP1/images/img1.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img2.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img3.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img4.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img5.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img6.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img7.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img8.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img9.jpg" alt="" width="19%">
          <img src="/4w4/wp-content/themes/TP1/images/img10.jpg" alt="" width="19%">
        </div>
      </div>
  </section>
</body>
</html>