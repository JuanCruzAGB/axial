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
// BlogController
        Route::get('/blog', 'BlogController@home')->name('blog.home');
        Route::get('/panel', 'BlogController@home')->name('blog.home');
        
// PostController
        Route::get('/publicacion/crear', 'Blog\PostController@showCreate')->name('post.showCreate');
        Route::post('/publicacion/crear', 'Blog\PostController@create')->name('post.create');
        // Route::post('/publicacion/crear', 'Blog\PostController@doCreate')->name('post.doCreate');
        Route::middleware('owner')->group(function(){
            Route::get('/publicacion/{slug}/editar', 'Blog\PostController@showEdit')->name('post.showEdit');
            Route::put('/publicacion/{id_post}/editar', 'Blog\PostController@edit')->name('post.edit');
            // Route::put('/publicacion/{id_post}/editar', 'Blog\PostController@doEdit')->name('post.doEdit');
        });
        
// CategorieController
        Route::get('/categoria/crear', 'Blog\CategorieController@showCreate')->name('categorie.showCreate');
        Route::post('/categoria/crear', 'Blog\CategorieController@create')->name('categorie.create');
        // Route::post('/categoria/crear', 'Blog\CategorieController@doCreate')->name('categorie.doCreate');
        Route::get('/categoria/{slug}/editar', 'Blog\CategorieController@showEdit')->name('categorie.showEdit');
        Route::put('/categoria/{id_categorie}/editar', 'Blog\CategorieController@edit')->name('categorie.edit');
        // Route::put('/categoria/{id_categorie}/editar', 'Blog\CategorieController@doEdit')->name('categorie.doEdit');
        
// TagController
        Route::get('/etiqueta/crear', 'Blog\TagController@showCreate')->name('tag.showCreate');
        Route::post('/etiqueta/crear', 'Blog\TagController@create')->name('tag.create');
        // Route::post('/etiqueta/crear', 'Blog\TagController@doCreate')->name('tag.doCreate');
        Route::get('/etiqueta/{slug}/editar', 'Blog\TagController@showEdit')->name('tag.showEdit');
        Route::put('/etiqueta/{id_tag}/editar', 'Blog\TagController@edit')->name('tag.edit');
        // Route::put('/etiqueta/{id_tag}/editar', 'Blog\TagController@doEdit')->name('tag.doEdit');

// UserController
        Route::middleware('owner')->group(function(){
            Route::get('/usuario/{slug}/editar', 'Blog\UserController@showEdit')->name('tag.showEdit');
            Route::put('/usuario/{id_user}/editar', 'Blog\UserController@edit')->name('tag.edit');
        });
    });