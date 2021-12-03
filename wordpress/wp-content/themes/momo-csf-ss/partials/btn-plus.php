<?php
$defaults = array(
	'type' => 2,
	'id' => null,
	'class' => null,
	'event' => 'href',
	'function' => 'https://www.clownssansfrontieres.ca/donner/'
);
$args = wp_parse_args( $args, $defaults );
$id = is_null($args['id'])? '': "id=\"{$args['id']}\"";
$class = is_null($args['class'])? '': " {$args['class']}";
$interaction = is_null($args['function'])? '': "{$args['event']}=\"{$args['function']}\"";

$tagParams = "{$id} {$interaction} class=\"btn-don{$class}\"";

switch ($args['type']) {
	case 1:
		echo '<button '.$tagParams.'>'.csf_get_option('txt_btn_don',false).'</button>';
		break;
	case 2:
		echo '<button type="submit" '.$tagParams.'>'.csf_get_option('txt_btn_don',false).'</button>';
		break;

	default:
		echo '<a '.$tagParams.'>'.csf_get_option('txt_btn_don',false).'</a>';
		break;
}
?>