<?php


// Host
define('_WEB_HOST_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/radixup');
define('_WEB_HOST_ROOT_ADMIN', _WEB_HOST_ROOT.'/admin');
// Path
define('_WEB_PATH_ROOT', str_replace('\\', '/', __DIR__));
define('_WEB_PATH_TEMPLATES', _WEB_PATH_ROOT.'/templates');
// Templates
define('_WEB_HOST_TEMPLATE_ADMIN', _WEB_HOST_ROOT.'/templates/admin');