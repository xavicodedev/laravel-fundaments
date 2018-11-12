<?php

//Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
//Contacto
Route::get('contactanos', ['as' => 'contactos', 'uses' => 'PagesController@contact']);
//Formulario
Route::post('contacto', 'PagesController@mensajes');

//Saludos
Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludos'])-> where ('nombre', "[A-Za-z]+");