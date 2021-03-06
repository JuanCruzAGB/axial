<?php
    namespace App\Http\Controllers\Blog;

    use App\Models\Blog\Feature;
    use App\Models\Blog\Tag;
    use App\Http\Controllers\BlogController;
    use Auth;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class TagController extends BlogController{
        /** @var string - The UserController principal Model. */
        protected $model = 'Tag';

        /**
         * Create a new Tag.
         * @param $request - Request.
         */
        public function create(Request $request){            
            $validator = $this->doCreate($request);
            if($validator){
                return redirect('/blog#new-tag')->withErrors($validator)->withInput();
            }
            return redirect('/panel#tags')->with('status', 'Etiqueta creada correctamente.');
        }

        /** Load the "Create a new Tag" section. */
        public function showCreate(){            
            return view('blog.tag.create', [
                'validation' => json_encode([
                    'rules' => Tag::$validation['create']['rules'],
                    'messages' => Tag::$validation['create']['messages'][$this->idiom],
                ]),
            ]);
        }

        /**
         * Valid and create the Tag.
         * @param $request Request.
         */
        public function doCreate(Request $request){
            $data = $request->all();
            
            $validator = Validator::make($request->all(), Tag::$validation['create']['rules'], Tag::$validation['create']['messages'][$this->idiom]);

            if($validator->fails()){
                return $validator;
            }else{
                // $data['id_user'] = Auth::user()->id_user;
                $data['id_user'] = 1;

                $data['slug'] = SlugService::createSlug(Tag::class, 'slug', $data['name']);
                
                Tag::create($data);
            }
        }

        /**
         * Edit a Tag.
         * @param $request - Request.
         * @param $id_tag - The Tag's PK.
         */
        public function edit(Request $request, $id_tag){
            $validator = $this->doEdit($request, $id_tag);
            if($validator){
                $tag = Tag::find($id_tag);
                return redirect("/etiqueta/$tag->slug/editar")->withErrors($validator)->withInput();
            }
            return redirect('/panel#tags')->with('status', 'Etiqueta editada correctamente.');
        }

        /**
         * Load the "Edit a Tag" section.
         * @param $slug - The Tag's slug.
         */
        public function showEdit($slug){
            $tag = Tag::findBySlug($slug);      
            return view('blog.tag.edit', [
                'tag' => $tag,
                'validation' => json_encode([
                    'rules' => Tag::$validation['edit']['rules'],
                    'messages' => Tag::$validation['edit']['messages'][$this->idiom],
                ]),
            ]);
        }

        /**
         * Valid and update the Tag.
         * @param $request - Request.
         * @param $id_tag - The Tag PK.
         */
        public function doEdit(Request $request, $id_tag){
            $data = $request->all();

            $tag = Tag::find($id_tag);
            
            $validator = Validator::make($request->all(), Tag::$validation['edit']['rules'], Tag::$validation['edit']['messages'][$this->idiom]);
            
            if($validator->fails()){
                return $validator;
            }else{                
                $data['id_user'] = Auth::user()->id_user;

                if($data['name'] != $tag->name){
                    $data['slug'] = SlugService::createSlug(Tag::class, 'slug', $data['name']);
                }

                $tag->update($data);
            }
        }

        /**
         * Delete a Tag.
         * @param $id_tag - The Tag's PK.
         */
        public function delete($id_tag){
            $this->doDelete($id_tag);
            return redirect('/panel#tags')->with('status', 'Etiqueta eliminada correctamente.');
        }

        /**
         * Delete the Tag.
         * @param $id_tag - The Tag PK.
         */
        public function doDelete($id_tag){
            $features = Feature::where('id_tag', '=', $id_tag)->get();
            foreach($features as $feature){
                $feature->delete();
            }
            $tag = Tag::find($id_tag);
            $tag->delete();
        }
    }