<?php 
/**
*  Flush Memcache CLI
*  (c) 2016 Ipan Ardian
*
*  Flush all existing items cache at the server using command line interface
*  For details, see the web site: https://github.com/ipanardian/flush-memcache-cli
*  The MIT License
*/

$memcache_obj = new Memcache;
$memcache_obj->connect('127.0.0.1', 11211);

if ($memcache_obj->flush()) {
	echo "OK Done\n";
}
else {
	echo "Failed to flush\n";
}
