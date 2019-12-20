<?php
// WebController
    Route::get('/', 'WebController@construccion')->name('web.construccion');
    Route::get('/demo', 'WebController@inicio')->name('web.inicio');
    
// CorreoController
    Route::post('/contactar', 'CorreoController@contactar')->name('correo.contactar');
    Route::get('/gracias', 'CorreoController@gracias')->name('correo.gracias');
    
// AuthController
    Route::get('/ingresar', 'Auth\LoginController@showIngresar')->name('auth.showIngresar');
    Route::post('/ingresar', 'Auth\LoginController@doIngresar')->name('auth.doIngresar');

    Route::middleware('auth')->group(function(){
// NoticiaController
        Route::get('/panel', 'NoticiaController@panel')->name('noticia.panel');
    });
    
// PostController
    Route::middleware('auth')->group(function(){
        Route::get('/noticia/crear', 'Blog\PostController@showCreate')->name('post.showCreate');
        Route::post('/noticia/crear', 'Blog\PostController@create')->name('post.create');
        // Route::post('/noticia/crear', 'Blog\PostController@doCreate')->name('post.doCreate');
        Route::middleware('owner')->group(function(){
            Route::get('/noticia/{slug}/editar', 'Blog\PostController@showEdit')->name('post.showEdit');
            Route::put('/noticia/{id_post}/editar', 'Blog\PostController@edit')->name('post.edit');
            // Route::put('/noticia/{id_post}/editar', 'Blog\PostController@doEdit')->name('post.doEdit');
            Route::delete('/noticia/{id_post}/eliminar', 'Blog\PostController@delete')->name('post.delete');
        });
    });
    // Route::get('/noticias', 'Blog\PostController@catList')->name('cat.post.list');
    Route::get('/noticia/{slug}', 'Blog\PostController@info')->name('post.info');