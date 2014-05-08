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
echo $retval.PHP_EOL;

echo $redis->setex('key', 3600, 'value');
echo $redis->get('key').PHP_EOL;

echo $redis->setnx('key', 'value').PHP_EOL;
echo $redis->setnx('key', 'value').PHP_EOL;

//hash 
$redis->hSet('h', 'key1', 'hello');
echo $redis->hGet('h', 'key1').PHP_EOL;
echo $redis->hLen('h').PHP_EOL;









