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

/** PostController */
    Route::post('/publicacion/crear', 'Blog\PostController@create')->name('post.create');
    Route::put('/publicacion/{slug}/editar', 'Blog\PostController@edit')->name('post.edit');

/** CategorieController */
    Route::post('/categoria/crear', 'Blog\CategorieController@create')->name('categorie.create');
    Route::put('/categoria/{slug}/editar', 'Blog\CategorieController@edit')->name('categorie.edit');

/** TagController */
    Route::post('/etiqueta/crear', 'Blog\TagController@create')->name('tag.create');
    Route::put('/etiqueta/{slug}/editar', 'Blog\TagController@edit')->name('tag.edit');