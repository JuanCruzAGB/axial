<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    /**
     * Valid data.
     * @param $request Request.
     */
    public function validate(Request $request){
        $data = $request->all();
        
        $request->validate(Post::$validation['create']['rules'], Post::$validation['create']['messages']['es']);
        
        $data['id_user'] = Auth::user()->id_user;
        $data['slug'] = SlugService::createSlug(Post::class, 'slug', $data['title']);
        
        Post::create($data);
    }
}
