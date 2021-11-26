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

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

//- Réglages > Général > Options CLowns sans Frontières --------------------------------------------
//https://wordpress.stackexchange.com/questions/129180/add-multiple-custom-fields-to-the-general-settings-page#answer-129203

$pageLang = substr(get_bloginfo('language'),0,2);
$siteLang = get_option('wpm_site_language');
$wpmTagPat = "/\[:[a-z]{0,2}\\]/";
$wpmPLPat = wpm_pat($pageLang);
$wpmSLPat = wpm_pat($siteLang);

add_action('admin_init', 'csf_general_section');  
function csf_general_section() {  
	add_settings_section(  
		'csf_settings_section', // Section ID 
		'Options Clowns Sans Frontieres', // Section Title
		'csf_section_options_callback', // Callback
		'general' // What Page?  This makes the section show up on the General Settings Page
	);
	
	add_settings_field(
		'site_logo',
		'Logo du site',
		'csf_url_callback',
		'general',
		'csf_settings_section',
		array(
			'site_logo'
		)
	);
	add_settings_field(
		'alt_logo',
		'Logo alternatif du site',
		'csf_url_callback',
		'general',
		'csf_settings_section',
		array(
			'alt_logo'
		)
	);
	add_settings_field(
		'txt_btn_don', // Option ID
		'Texte Bouton Don', // Label
		'csf_textbox_callback', // !important - This is where the args go!
		'general', // Page it will be displayed (General Settings)
		'csf_settings_section', // Name of our section
		array( // The $args
			'txt_btn_don' // Should match Option ID
		)
	);
	add_settings_field(
		'txt_btn_plus',
		'Texte Bouton Plus >',
		'csf_textbox_callback',
		'general',
		'csf_settings_section',
		array(
			'txt_btn_plus'
		)
	);
	add_settings_field(
		'ttl_evenements',
		'Titre Évènements',
		'csf_textbox_callback',
		'general',
		'csf_settings_section',
		array(
			'ttl_evenements'
		)
	);
	add_settings_field(
		'ttl_spectacles',
		'Titre Spectacles',
		'csf_textbox_callback',
		'general',
		'csf_settings_section',
		array(
			'ttl_spectacles'
		)
	);
	add_settings_field(
		'ttl_animations',
		'Titre Animations',
		'csf_textbox_callback',
		'general',
		'csf_settings_section',
		array(
			'ttl_animations'
		)
	);
	add_settings_field(
		'ttl_ateliers',
		'Titre Ateliers',
		'csf_textbox_callback',
		'general',
		'csf_settings_section',
		array(
			'ttl_ateliers'
		)
	);
	add_settings_field(
		'ttl_nouvelles',
		'Titre Nouvelles',
		'csf_textbox_callback',
		'general',
		'csf_settings_section',
		array(
			'ttl_nouvelles'
		)
	);

	register_setting('general','site_logo', array('default' => '/wp-content/icones/CSF_Logo_MASA_RN.svg'));
	register_setting('general','alt_logo', array('default' => '/wp-content/icones/CSF_Logo_MASA_WW.svg'));
	register_setting('general','txt_btn_don', array('default' => '[:en]Donate[:fr]Faire un don[:]'));
	register_setting('general','txt_btn_plus', array('default' => '[:en]Show more[:fr]En savoir plus[:]'));
	register_setting('general','ttl_evenements', array('default' => '[:en]Events[:fr]Évènements[:]'));
	register_setting('general','ttl_spectacles', array('default' => '[:en]Shows[:fr]Spectacles[:]'));
	register_setting('general','ttl_animations', array('default' => '[:en]Entertainments[:fr]Animations[:]'));
	register_setting('general','ttl_ateliers', array('default' => '[:en]Activities[:fr]Ateliers[:]'));
	register_setting('general','ttl_nouvelles', array('default' => '[:en]News[:fr]Nouvelles[:]'));
}

function csf_section_options_callback() { // Section Callback
	echo '<style>
					.csf-Desc{padding:10px;border-radius:20px;font:"Roboto";background:#ec1a24;color:#f0eeee}
					img.csf{height:80px;padding:0 20px;border-radius:40px;margin-left:20px;background:#FFEFEF}
					img.csf:hover{background:#EC1A24}
					.csf-wpm-combine {display:none}
					.csf-wpm-single {margin-left:5px;margin-right:20px}
				</style>
				<script type="text/javascript">
					function csfWpmCombine(group) {
						let returnVal = "";
						for (const lang of ["en","fr"]) {
							returnVal += "[:"+ lang +"]"+ group.querySelector("."+lang).value;
						}
						group.children[0].value = returnVal +"[:]";
					}
				</script>
				<p class="csf-Desc">Modifiez les diverses informations apparaissant dans votre site!</p>';
}

function csf_textbox_callback($args) {  // Textbox Callback
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" class="csf-wpm-combine" value="'. $option .'" size="40" readonly/>';
	foreach (array("en","fr") as $lang) {
		echo '<img src="/wp-content/plugins/wp-multilang/flags/'. $lang .'.png"><input type="text" class="csf-wpm-single '. $lang .'" value="'. emulate_wpm($option, wpm_pat($lang)) .'" oninput="csfWpmCombine(this.parentElement)"/>';
	}
}
function csf_url_callback($args) {  // Logo Callback
	$option = get_option($args[0]);
	echo '<input type="url" id="'. $args[0] .'" name="'. $args[0] .'" value="'. $option .'" size="80" placeholder="/wp-content/uploads/.../logo.png"/><img class="csf" src="'. $option .'" />';
}
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

//- get home info --------------------------------
function get_home_info($slug = '', $echo = true) {
	$info = get_field($slug, get_option('page_on_front'));
	if ($echo) echo $info;
	else return $info;
}
function csf_get_option($slug = '', $echo = true, $trans = true) {
	global $wpmPLPat;
	$info = get_option($slug);
	$info = $trans ? emulate_wpm($info,$wpmPLPat) : $info;
	if ($echo) echo $info;
	else return $info;
}
function emulate_wpm($str = '', $pat) {
	global $wpmTagPat;
	global $wpmSLPat;
	if (preg_match($pat, $str, $matches)) return $matches[1];
	if (preg_match($wpmSLPat, $str, $matches)) return $matches[1];
	return preg_replace($wpmTagPat,'',$str);
}
function wpm_pat($lang) {return "/\[:{$lang}\](.*?)\[:.{0,2}\]/";}

//- get ressources folder ------------------------
function get_ressource($path = '') {
	return get_template_directory_uri() . '/ressources/' . $path;
}

//- generer ballon -------------------------------
function gen_ballon($x = 0, $y = 0, $scale = 1) {
	return get_template_part('partials/ballon', null, array('x' => $x, 'y' => $y, 'scale' => $scale));
}

//- get Partenaire image url ---------------------
function get_partner_img_url($acf) {
	$icon = $acf->icon_type = "vector" ? $acf->icon_vector : $acf->icon_raster;
	return gettype($icon) == 'object' ? $icon->url : $icon;
}