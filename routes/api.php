<?php
    use Illuminate\Http\Request;

    Route::middleware('api')->group(function(){
/** NoticiaController */
        Route::post('noticias', 'NoticiaController@loadMore');
    });
