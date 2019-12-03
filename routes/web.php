<?php
/** WebController */
    Route::get('/', 'WebController@construccion')->name('web.construccion');
    Route::get('/demo', 'WebController@inicio')->name('web.inicio');
    
/** CorreoController */
    Route::post('/contactar', 'CorreoController@contactar')->name('correo.contactar');
    Route::get('/gracias', 'CorreoController@gracias')->name('correo.gracias');
    
/** AuthController */
    Route::get('/ingresar', 'Auth\LoginController@showIngresar')->name('auth.showIngresar');
    Route::post('/ingresar', 'Auth\LoginController@doIngresar')->name('auth.doIngresar');

    Route::middleware('auth')->group(function(){
/** BlogController */
        Route::get('/blog', 'BlogController@home')->name('blog.home');
        Route::get('/panel', 'BlogController@home')->name('blog.home');
        
/** PostController */
        Route::post('/publicacion/crear', 'Blog\PostController@create')->name('post.create');
        Route::put('/publicacion/{slug}/editar', 'Blog\PostController@edit')->name('post.edit');
        
/** CategorieController */
        Route::post('/categoria/crear', 'Blog\CategorieController@create')->name('categorie.create');
        Route::get('/categoria/{slug}/editar', 'Blog\CategorieController@showEdit')->name('categorie.showEdit');
        Route::put('/categoria/{id_categorie}/editar', 'Blog\CategorieController@doEdit')->name('categorie.doEdit');
        
/** TagController */
        Route::post('/etiqueta/crear', 'Blog\TagController@create')->name('tag.create');
        Route::get('/etiqueta/{slug}/editar', 'Blog\TagController@showEdit')->name('tag.showEdit');
        Route::put('/etiqueta/{id_tag}/editar', 'Blog\TagController@doEdit')->name('tag.doEdit');
    });