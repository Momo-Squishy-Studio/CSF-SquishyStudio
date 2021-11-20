<?php
$defaults = array(
	'x' => 0,
	'y' => 0,
	'scale' => 1
);
$args = wp_parse_args( $args, $defaults );

$x = $args['x'];
$y = $args['y'];
$scale = $args['scale'];

$hasTl = ($x != 0 || $y != 0);
$hasStyle = ($hasTl || $scale != 1);
?>

<img class="ballon" src="<?php echo get_ressource('images/ballon_AP.svg')?>" alt="ballon" <?php
if ($hasStyle) :?>style="transform:<?php
	if ($hasTl) echo 'translate('. $x .','. $y .')';
	if ($scale != 1) echo 'scale('. $scale .')';
endif;?>">