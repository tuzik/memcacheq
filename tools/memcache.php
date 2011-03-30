<?php
$memcache_obj = memcache_connect("localhost", 21211);
$memcache_obj->set('foo1#2003', '2003');
$memcache_obj->set('foo1#2001', '2001');
$memcache_obj->set('foo1#2002', '2002');
$memcache_obj->set('foo1#2003', '2005');

while($ret = $memcache_obj->get('foo1')) {
	   var_dump($ret);
}
