<?php
$defaults = array(
	'type' => 2,
	'id' => null,
	'class' => 'href',
	'event' => '',
	'function' => null
);
$id = is_null($args['id'])? '': "id=\"{$args['id']}\"";
$args = wp_parse_args( $args, $defaults );
$type = array('a','input type="button"','button','input type="submit"')[min($args['type'],3)];
$interaction = is_null($args['function'])? '': "{$args['event']}=\"{$args['function']}\"";

// echo $id.'<br>';
// echo $type.'<br>';
// echo $interaction.'<br>';
?>
<<?php echo $type.' '.$id.' '.$interaction.' ' ?>class="btn-don<?php echo $args['class']?>"><?php csf_get_option('txt_btn_don'); ?></<?php echo $type; ?>>