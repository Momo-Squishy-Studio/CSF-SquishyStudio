<?php
	/*-----------------------------------------------------------------------------------*/
	/* Ce fichier est présent sur chaque page
	/* Vous pouvez y ajouter des fonctions au besoin
	/*-----------------------------------------------------------------------------------*/

/* --------------------------------
Ajoute les vignettes dans les posts de type Article */
add_theme_support( 'post-thumbnails' );


/* --------------------------------
Déclare le menu principal */
register_nav_menus( 
	array(
		/* 
			1. 'main-menu' = Nom dans le code
			2. 'Menu principal' = Nom dans l'admin
			3. 'Menu principal du site' = Description dans l'admin */
		'main-menu' => __( 'Menu principal', 'Menu principal du site' ),
		'social-menu' => __( 'Menu social', 'Menu listant les liens vers les réseaux sociaux' ),
		/* Dupliquer cette ligne si vous désirez déclarer d'autres menus */
	)
);
//https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/#div-comment-832
/*function clean_custom_menu( $theme_location ) {
	if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
			$menu = get_term( $locations[$theme_location], 'nav_menu' );
			$menu_items = wp_get_nav_menu_items($menu->term_id);

			$menu_list  = '<nav>' ."\n";
			$menu_list .= '<ul class="main-nav" id="HELLOWORLD">' ."\n";

			$count = 0;
			$submenu = false;
			 
			foreach( $menu_items as $menu_item ) {
					 
					$link = $menu_item->url;
					$title = $menu_item->title;
					 
					if ( !$menu_item->menu_item_parent ) {
							$parent_id = $menu_item->ID;
							 
							$menu_list .= '<li class="item">' ."\n";
							$menu_list .= '<a href="'.$link.'" class="title">'.$title.'</a>' ."\n";
					}

					if ( $parent_id == $menu_item->menu_item_parent ) {

							if ( !$submenu ) {
									$submenu = true;
									$menu_list .= '<ul class="sub-menu">' ."\n";
							}

							$menu_list .= '<li class="item">' ."\n";
							$menu_list .= '<a href="'.$link.'" class="title">'.$title.'</a>' ."\n";
							$menu_list .= '</li>' ."\n";
									 

							if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
									$menu_list .= '</ul>' ."\n";
									$submenu = false;
							}

					}

					if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
							$menu_list .= '</li>' ."\n";      
							$submenu = false;
					}

					$count++;
			}
			 
			$menu_list .= '</ul>' ."\n";
			$menu_list .= '</nav>' ."\n";

	} else {
			$menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
	}
	echo $menu_list;
}*/


/* --------------------------------
Function déclarant la barre latérale principale */
function add_sidebars() {
	register_sidebar(array(	
		/* 
			1. 'main-sidebar' = Nom dans le code
			2. 'Barre laterale principale' = Nom dans l'admin
			3. 'Barre latérale principale du site' = Description dans l'admin */
		'main-sidebar' => __( 'Barre baterale principale', 'Barre latérale principale du site' ),
		/* Dupliquer cette ligne si vous désirez déclarer d'autres sidebars */
		'main-contactbar' => __( 'Barre de contacts principale', 'Barre regroupant les moyens de contact' ),
	));
} 
/* Appel la fonction déclarant la barre latérale au moment de l'init des widgets */
add_action('widgets_init', 'add_sidebars');


/* -------------------------------- 
Function ajoutant les styles et scripts */
function add_style_and_js()  { 
	/* Ajoute le fichier style.css du theme WordPress actif 
	  1. 'default' = ID de référence à donner au à la feuille de style
		2. get_template_directory_uri() . '/style.css' = Chemin où ce trouve le fichier CSS en question
	*/
	wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');
	wp_enqueue_style('default', get_template_directory_uri() . '/style.css');
	
	/* Pour ajoutez une feuille de style supplémentaire, copier la ligne précédente et ajuster le chemin du fichier de façon relative vers votre nouveau fichier CSS */
	// wp_enqueue_style('default', get_template_directory_uri() . '../../csf-squishystudios-vite/style.scss');

	/* Ajoute le fichier main.js du theme WordPress actif 
	   1. 'default' = ID de référence à donner au script
		 2. get_template_directory_uri() . '/main.js' = Chemin où ce trouve le fichier JS en question
		 3. array() = Liste des dépendances de ce script (généralement vide)
		 4. false = Si un no de version doit être ajouté (généralement à false)
		 5. true = Est-ce que le script doit-être ajouté à la fin du body. Si mis à false le script est ajouter dans le head à la place
	*/
	wp_enqueue_script('default', get_template_directory_uri() . '/main.js', array(), false, true);
	// wp_enqueue_script('default', 'https://kit.fontawesome.com/f5e9d462b9.js', array(), false, true);

	/* Pour ajoutez un script, copier la ligne précédente et ajuster le chemin de façon relative vers votre nouveau fichier JS */
}

/* Appel de la fonction ajoutant les styles et scripts */
add_action('wp_enqueue_scripts', 'add_style_and_js'); 

/* --------------------------------
Appels personalisés du REST API*/

/*//https://wordpress.stackexchange.com/questions/209381/get-wp-navigation-menu-from-rest-api-v2/274513#274513?newreg=1d1561e470ba4f6c9b0f579f6cc02d4c
function get_menu() {
	$menu_items = wp_get_nav_menu_items($menu->term_id);
	return wp_get_nav_menu_items('main');
}

add_action( 'rest_api_init', function () {
			register_rest_route( 'myroutes', '/menu', array(
			'methods' => 'GET',
			'callback' => 'get_menu',
	) );
} );*/