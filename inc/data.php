<?php
$atchfa_data = [
	'default_version'=>'4.7',
	'cdn_versions'=> [
		'4.7'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
		'4.6.3'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
		'4.6.2'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css',
		'4.6.1'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css',
		'4.6.0'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css',
		'4.5.0'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
		'4.4.0'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css',
		'4.3.0'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css',
		'4.2.0'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css',
		'4.1.0'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css',
		'4.0.3'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css',
		'4.0.2'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.2/css/font-awesome.min.css',
		'4.0.1'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css',
		'4.0.0'=>'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css'
	]
];
function atchfa_get_cdn_version_option () {
	return get_option('attach-version');
}
function atchfa_get_load_type_option () {
	return get_option('attach-load-type');
}

?>