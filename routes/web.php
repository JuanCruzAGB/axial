<?php
/** WebController */
    Route::get('/', 'WebController@construccion')->name('web.construccion');
    Route::get('/demo', 'WebController@inicio')->name('web.inicio');
    
/** CorreoController */
    Route::post('/contactar', 'CorreoController@contactar')->name('correo.contactar');
    Route::get('/gracias', 'CorreoController@gracias')->name('correo.gracias');
    
/** BlogController */
    Route::get('/blog', 'BlogController@home')->name('blog.home');
    Route::get('/panel', 'BlogController@home')->name('blog.home');