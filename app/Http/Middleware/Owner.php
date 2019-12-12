<?php
    namespace App\Http\Middleware;

    use Auth;
    use Closure;

    class Owner{
        /** @var array - Controllers functions where his principal Model have an owner who is the one who execute. */
        protected $functions = [
            'App\Http\Controlers\Blog\PostController@showEdit' => '\App\Models\Blog\Post',
            'App\Http\Controlers\Blog\PostController@doEdit' => '\App\Models\Blog\Post',
            'App\Http\Controlers\Blog\PostController@doDelete' => '\App\Models\Blog\Post',
            'App\Http\Controlers\Blog\UsersController@showEdit' => '\App\User',
            'App\Http\Controlers\Blog\UsersController@doEdit' => '\App\User',
        ];

        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next){
            $found = false;
            foreach($this->functions as $function => $model){
                if($request->route()->uri == $function){
                    foreach($request->route()->parameters as $parameter => $value){
                        if(preg_match('/slug/', $parameter)){
                            $object = $model::findBySlug($value);
                        }else{
                            $object = $model::find($value);
                        }
                    }
                    if(Auth::user()->id_user == $object->id_user){
                        return $next($request);
                    }
                    $found = true;
                }
            }
            if(!$found){
                return $next($request);
            }else{
                abort(403);
            }
        }
    }