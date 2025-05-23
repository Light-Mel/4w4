<?php
// Définir le chemin vers le dossier "functions"
$functions_dir = get_template_directory() . '/functions/';

// Inclure les fichiers spécifiques
include_once $functions_dir . 'options.php';
include_once $functions_dir . 'customizer.php';
include_once $functions_dir . 'genere-list-categorie.php';

// Inclure d'autres fichiers si nécessaire
// include_once $functions_dir . 'autre-fichier.php';

function custom_category_template($template) {
    if (is_category('pays')) { // Slug de la catégorie
        $new_template = locate_template(array('template-pays.php'));
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('category_template', 'custom_category_template');
