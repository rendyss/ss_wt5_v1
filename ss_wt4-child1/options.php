<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$option[] = array(
	'name' => __( 'Global' ),
	'type' => 'heading'
);

$option[] = array(
	'name' => __( 'Logo' ),
	'id'   => 'ss_logo',
	'type' => 'upload'
);

return $option;