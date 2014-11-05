<?php

/*Route::get('/', function()
{
	return View::make('index');
});*/
Route::get('/', 'HomeController@index');
Route::get('formreg', 'HomeController@inscrip');
/*login*/
Route::get('login', 'SessionsController@create');
Route::post('logins', 'SessionsController@login');
Route::get('logout', 'SessionsController@logout');
/*login*/

Route::controller('admi', 'admController');
Route::controller('aut', 'autController');
Route::controller('certifi', 'certController');
Route::controller('controlpagos', 'contrlpagosController');
Route::controller('coord', 'coordController'); 