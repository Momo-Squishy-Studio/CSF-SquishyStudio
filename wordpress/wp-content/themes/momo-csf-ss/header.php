<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap">
<script src="https://kit.fontawesome.com/f5e9d462b9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
	<nav>
		<?php
			// $siteLogo = '<a href="' . esc_url(home_url('/')) . '"><img src="/wp-content/uploads/icones/CSF_Logo_MASA_RN.svg" alt="logo ' . esc_attr(get_bloginfo('name', 'display') .'"></a>';
			$siteLogo = '<a id="%1$s-logo" href="' . esc_url(home_url('/')) . '"><img src="/wp-content/uploads/icones/CSF_Logo_MASA_RN.svg" alt="' . get_bloginfo('name') . '"></a>';
			$siteHamb = '<input type="checkbox" id="%1$s-cb"><label for="%1$s-cb" id="%1$s-cb-lbl" class="fas fa-bars"></label>';
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			//https://monsterspost.com/how-to-build-wordpress-navigation-using-wp_nav_menu/
			wp_nav_menu( array( 'theme_location' => 'main-menu', 'items_wrap' => $siteLogo . $siteHamb . '<ul id="%1$s" class="%2$s">%3$s</ul>' ) );
		?>
	</nav>
</header>



<main><!-- Débute le contenu principal de notre site -->
