<?php
// WebController
    Route::get('/', 'WebController@construccion')->name('web.construccion');
    Route::get('/demo', 'WebController@inicio')->name('web.inicio');
    Route::middleware('auth')->group(function(){
        Route::get('/panel', 'WebController@panel')->name('noticia.panel');
    });
    
// CorreoController
    Route::post('/contactar', 'CorreoController@contactar')->name('correo.contactar');
    Route::get('/gracias', 'CorreoController@gracias')->name('correo.gracias');
    
// AuthController
    Route::get('/ingresar', 'Auth\LoginController@showIngresar')->name('auth.showIngresar');
    Route::post('/ingresar', 'Auth\LoginController@doIngresar')->name('auth.doIngresar');

    Route::middleware('auth')->group(function(){
// NoticiaController
        Route::post('/noticia/crear', 'NoticiaController@create')->name('noticia.create');
        Route::get('/noticia/{slug}/editar', 'NoticiaController@showEdit')->name('noticia.showEdit');
        Route::put('/noticia/{id_noticia}/editar', 'NoticiaController@edit')->name('noticia.edit');
        Route::delete('/noticia/{id_noticia}/eliminar', 'NoticiaController@delete')->name('noticia.delete');
    });
    Route::get('/noticia/{slug}', 'NoticiaController@info')->name('noticia.info');
    Route::get('/noticias', 'NoticiaController@list')->name('noticia.list');

    Route::middleware('auth')->group(function(){
// MiembroController
        Route::post('/miembro/crear', 'MiembroController@create')->name('miembro.create');
        Route::get('/miembro/{slug}/editar', 'MiembroController@showEdit')->name('miembro.showEdit');
        Route::put('/miembro/{id_miembro}/editar', 'MiembroController@edit')->name('miembro.edit');
        Route::delete('/miembro/{id_miembro}/echar', 'MiembroController@delete')->name('miembro.delete');
    });
    Route::get('/miembros', 'MiembroController@info')->name('miembro.info');