<?php
use Minor\Framework\Router;

//Router::get('/', 'App\Controllers\demo@index');
//Router::get('/test.html', 'App\Controllers\demo@test');
//Router::get('/view/(:num)', 'App\Controllers\demo@view');
/*Router::get('/(:any)', function($slug) {
	echo 'The slug is: ' . $slug;
});*/

Router::get('/login.html', 'App\Controllers\Admin@getLogin');