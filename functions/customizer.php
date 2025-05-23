<?php 

// Ajouter de l'info directement dans wordpress
function theme_31w_customize_register($wp_customize) {

  /*
  *** SECTION GENERAL *********************************************************************************************
  */
  $wp_customize->add_section('general_section', array(
    'title' => __('Infos Générales', 'theme_31w'),
    'priority' => 30,
  ));


  // auteur
  $wp_customize->add_setting('general_auteur', array(
    'default' => __('Mélanie Caillol', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('general_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'general_section',
    'type' => 'text',
  ));


  // email
  $wp_customize->add_setting('general_email', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('general_email', array(
    'label' => __('E-Mail', 'theme_31w'),
    'section' => 'general_section',
    'type' => 'text',
  ));

    // adresse dans le footer
  $wp_customize->add_setting('general_adresse', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('general_adresse', array(
    'label' => __('Adresse', 'theme_31w'),
    'section' => 'general_section',
    'type' => 'text',
  ));


  // numéro de téléphone footer
  $wp_customize->add_setting('general_telephone', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('general_telephone', array(
    'label' => __('Téléphone', 'theme_31w'),
    'section' => 'general_section',
    'type' => 'text',
  ));




  /*
  *** SECTION HERO ********************************************************************************************
  */
  $wp_customize->add_section('hero_section', array(
    'title' => __('Infos Hero', 'theme_31w'),
    'priority' => 30,
  ));

  // background
  /*$wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Hero Background Image', 'theme_31w'),
    'section' => 'hero_section',
  )));*/

  // background 1
  /*$wp_customize->add_setting('hero_background_1', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_1', array(
    'label' => __('Hero Background Image1', 'theme_31w'),
    'section' => 'hero_section',
  )));

  // background 2
  $wp_customize->add_setting('hero_background_2', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_2', array(
    'label' => __('Hero Background Image2', 'theme_31w'),
    'section' => 'hero_section',
  )));

  // background 3
  $wp_customize->add_setting('hero_background_3', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_3', array(
    'label' => __('Hero Background Image3', 'theme_31w'),
    'section' => 'hero_section',
  )));*/


  // Ajout de la donnée image en background

  for ($k = 0; $k<3; $k++) {
    $wp_customize->add_setting('herobackground' . $k, array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    // Ajout du contrôle de la donnée
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'herobackground' . $k, array(
        'label' => __('Image en arrière plan ' . ($k+1), 'theme_4w4'),
        'section' => 'hero_section',
    )));
}



  /*
  *** SECTION FOOTER *****************************************************************************************
  */
  $wp_customize->add_section('footer_section', array(
    'title' => __('Infos Footer', 'theme_31w'),
    'priority' => 30,
  ));

  // mission footer
  $wp_customize->add_setting('footer_mission', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text_area',
  ));

  /*
  *** SECTION 404 **************************************************************************************************
  */

// VIELLE VERSION
// $wp_customize->add_section('erreur_section', array(
//   'title' => __('Infos Erreur', 'theme_31w'),
//   'priority' => 30,
// ));

// // background
// $wp_customize->add_setting('erreur_image', array(
//   'default' => '',
//   'sanitize_callback' => 'esc_url_raw',
// ));

// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_image', array(
//   'label' => __('Image Erreur', 'theme_31w'),
//   'section' => 'erreur_section',
// )));


// // texte
// $wp_customize->add_setting('erreur_texte', array(
//   'default' => __('', 'theme_31w'),
//   'sanitize_callback' => 'sanitize_text_field'
// ));

// $wp_customize->add_control('erreur_texte', array(
//   'label' => __('Texte Erreur', 'theme_31w'),
//   'section' => 'erreur_section',
//   'type' => 'text',
// ));

// NOUVELLE VERSION
$wp_customize->add_section('section_404', array(
  'title' => __('Infos Erreur', 'theme_31w'),
  'priority' => 30,
));

// background
$wp_customize->add_setting('erreur_image', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_image', array(
  'label' => __('Image Erreur', 'theme_31w'),
  'section' => 'section_404',
)));

// texte/titre
$wp_customize->add_setting('erreur_titre', array(
  'default' => __('', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('erreur_titre', array(
  'label' => __('Titre Erreur', 'theme_31w'),
  'section' => 'section_404',
  'type' => 'text',
));

// texte/sous-titre
$wp_customize->add_setting('erreur_texte', array(
  'default' => __('', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('erreur_texte', array(
  'label' => __('Texte Erreur', 'theme_31w'),
  'section' => 'section_404',
  'type' => 'text',
));

}

add_action('customize_register', 'theme_31w_customize_register');

?>