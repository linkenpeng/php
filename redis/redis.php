<?php
/*
redis server: windows 2.6.12 32bit
php extension: vc6 php_redis 2.1.3
Predis:	v0.6
*/
spl_autoload_register(function($class) {
	$file = __DIR__.'/'.$class.'.php';
	if (file_exists($file)) {
		require $file;
		return true;
	}
});

$redis = new Predis\Client();

$redis->set('library', 'predis');
$retval = $redis->get('library');
echo $retval;