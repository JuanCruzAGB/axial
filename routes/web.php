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
    });
    
// PostController
    Route::middleware('auth')->group(function(){
        Route::get('/publicacion/crear', 'Blog\PostController@showCreate')->name('post.showCreate');
        Route::post('/publicacion/crear', 'Blog\PostController@create')->name('post.create');
        // Route::post('/publicacion/crear', 'Blog\PostController@doCreate')->name('post.doCreate');
        Route::middleware('owner')->group(function(){
            Route::get('/publicacion/{slug}/editar', 'Blog\PostController@showEdit')->name('post.showEdit');
            Route::put('/publicacion/{id_post}/editar', 'Blog\PostController@edit')->name('post.edit');
            // Route::put('/publicacion/{id_post}/editar', 'Blog\PostController@doEdit')->name('post.doEdit');
            Route::delete('/publicacion/{id_post}/eliminar', 'Blog\PostController@delete')->name('post.delete');
        });
    });
    Route::get('/categoria/{slug}/publicaciones', 'Blog\PostController@catList')->name('cat.post.list');
    Route::get('/etiqueta/{slug}/publicaciones', 'Blog\PostController@tagList')->name('tag.post.list');
    Route::get('/publicacion/{slug}', 'Blog\PostController@info')->name('post.info');
        
    Route::middleware('auth')->group(function(){
// CategoryController
        Route::get('/categoria/crear', 'Blog\CategoryController@showCreate')->name('category.showCreate');
        Route::post('/categoria/crear', 'Blog\CategoryController@create')->name('category.create');
        // Route::post('/categoria/crear', 'Blog\CategoryController@doCreate')->name('category.doCreate');
        Route::get('/categoria/{slug}/editar', 'Blog\CategoryController@showEdit')->name('category.showEdit');
        Route::put('/categoria/{id_category}/editar', 'Blog\CategoryController@edit')->name('category.edit');
        // Route::put('/categoria/{id_category}/editar', 'Blog\CategoryController@doEdit')->name('category.doEdit');
        Route::delete('/categoria/{id_category}/eliminar', 'Blog\CategoryController@delete')->name('category.delete');
        
// TagController
        Route::get('/etiqueta/crear', 'Blog\TagController@showCreate')->name('tag.showCreate');
        Route::post('/etiqueta/crear', 'Blog\TagController@create')->name('tag.create');
        // Route::post('/etiqueta/crear', 'Blog\TagController@doCreate')->name('tag.doCreate');
        Route::get('/etiqueta/{slug}/editar', 'Blog\TagController@showEdit')->name('tag.showEdit');
        Route::put('/etiqueta/{id_tag}/editar', 'Blog\TagController@edit')->name('tag.edit');
        // Route::put('/etiqueta/{id_tag}/editar', 'Blog\TagController@doEdit')->name('tag.doEdit');
        Route::delete('/etiqueta/{id_tag}/eliminar', 'Blog\TagController@delete')->name('tag.delete');
    });

// UserController
    Route::middleware('auth')->group(function(){
        Route::middleware('owner')->group(function(){
            Route::get('/usuario/{slug}/editar', 'Blog\UserController@showEdit')->name('user.showEdit');
            Route::put('/usuario/{id_user}/editar', 'Blog\UserController@edit')->name('user.edit');
        });
    });
    Route::get('/usuario/{slug}', 'Blog\UserController@info')->name('user.info');