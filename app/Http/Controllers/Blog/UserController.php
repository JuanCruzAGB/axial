<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Presentation;
    use App\Models\Blog\Categorie;
    use App\Models\Blog\Tag;
    use App\Http\Controllers\BlogController;
    use App\User;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Validator;
    use Intervention\Image\ImageManagerStatic as Image;
    use Storage;

    class UserController extends BlogController{
        /** @var string - The UserController principal Model. */
        protected $model = 'User';

        /**
         * The User information view.
         * @param $slug - The User slug.
         */
        public function info($slug){
            $user = User::findBySlug($slug);
            return view('blog.user.info', [
                'user' => $user,
            ]);
        }

        /**
         * Edit an User.
         * @param $request - Request.
         * @param $id_user - The User's PK.
         */
        public function edit(Request $request, $id_user){
            $validator = $this->doEdit($request, $id_user);
            if($validator){
                $user = User::find($id_user);
                return redirect("/usuario/$user->slug/editar")->withErrors($validator)->withInput();
            }
            return redirect('/panel#profile')->with('status', 'Publicación editada correctamente.');
        }

        /**
         * Load the "Edit an User" section.
         * @param $slug - The User's slug.
         */
        public function showEdit($slug){      
            $user = User::findBySlug($slug);
            $presentation = Presentation::find($user->id_presentation);
            $user->presentation = $presentation;
            return view('blog.user.edit', [
                'validation' => json_encode([
                    'rules' => User::$validation['edit']['rules'],
                    'messages' => User::$validation['edit']['messages'][$this->idiom],
                ]),
                'user' => $user,
            ]);
        }

        /**
         * Valid and update the User.
         * @param $request - Request.
         * @param $id_user - The User PK.
         */
        public function doEdit(Request $request, $id_user){
            $data = $request->all();
            
            $user = User::find($id_user);
            
            $validator = Validator::make($request->all(), User::$validation['edit']['rules'], User::$validation['edit']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{
                $validator = Validator::make($request->all(), Presentation::$validation['edit']['rules'], Presentation::$validation['edit']['messages'][$this->idiom]);    

                if($validator->fails()){
                    return $validator;
                }else{
                    $data['id_user'] = Auth::user()->id_user;

                    if($data['title'] != $user->title){
                        $data['slug'] = SlugService::createSlug(User::class, 'slug', $data['title']);
                    }

                    if(isset($data['password'])){
                        $data['password'] = \Hash::make($data['password']);
                    }else{
                        $data['password'] = $user->password;
                    }

                    if($request->hasFile('picture')){
                        $currentImage = $user->picture;
                        
                        $filepath = $request->file('picture')->hashName('users');
                        
                        $img = Image::make($request->file('picture'))
                                ->resize(525, 525, function($constrait){
                                    $constrait->aspectRatio();
                                    $constrait->upsize();
                                });
                                
                        Storage::put($filepath, (string) $img->encode());
                        
                        $data['picture'] = $filepath;
                    }

                    $user->update($data);
                
                    if(isset($currentImage) && !empty($currentImage)){
                        Storage::delete($currentImage);
                    }
            
                    $presentation = Presentation::find($user->id_presentation);
                    $presentation->update($data);
                }
            }
        }

        /**
         * Delete the User.
         * @param $id_user - The User PK.
         */
        public function doDelete($id_user){
            $user = User::find($id_user);
            $user->delete();
        }
    }