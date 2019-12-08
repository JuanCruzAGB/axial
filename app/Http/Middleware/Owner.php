<?php
    namespace App\Http\Middleware;

    use Auth;
    use Closure;

    class Owner{
        /** @var string - routes were could be an owner. */
        protected $routes = [
            'publicacion/{slug}/editar' => '\App\Models\Blog\Post',
            'publicacion/{id_post}/editar' => '\App\Models\Blog\Post',
            'usuario/{slug}/editar' => '\App\User',
            'usuario/{id_user}/editar' => '\App\User',
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
            foreach($this->routes as $route => $model){
                if($request->route()->uri == $route){
                    foreach($request->route()->parameters as $parameter => $value){
                        if(preg_match('/slug/', $parameter)){
                            $object = $model::findBySlug($value);
                        }else{
                            $object = $model::find($value);
                        }
                    }
                    $model = new $model;
                    if(Auth::user()->id_user == $object[$model->getKeyName()]){
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