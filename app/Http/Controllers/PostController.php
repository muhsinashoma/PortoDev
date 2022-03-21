<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostModel;
use App\Models\Subcategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$all_posts = PostModel::all();

        $all_posts = PostModel::where('trash',false)->latest() -> get();
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.index', [
            'all_data' => $all_posts,
            'all_categories' => $categories,
            'all_tags' =>$tags

        ]);




//        $all_posts = PostModel::where('status',true)->latest() -> get();
//        $categories = Category::all();
//        $tags = Tag::all();
//
//        return view('admin.blog.index', [
//            'all_data' => $all_posts,
//            'all_categories' => $categories,
//            'all_tags' =>$tags
//
//        ]);

    }


    /*
     * To show trash
     */

    public function postTrashShow(){

         $all_posts = PostModel::where('trash', true)->orderBy('updated_at','desc')->get();
         $categories = Category::all();
         $tags = Tag::all();

        return view('admin.post.trash',[
           'all_data' => $all_posts,
           'all_categories' => $categories,
           'all_tags' =>$tags
       ]);
    }

  /*
 * To post trash update
 */

  public function postTrashUpdate($id){
   // echo $id;

    //both trash and recovery with postTrashUpdate function

    $trash_data = PostModel::find($id);

    if ($trash_data->trash==false){
        $trash_data->trash=true;
    } else{
        $trash_data->trash = false;
    }

      $trash_data->update();

      return back();
  }

/*
 * To show all blog pages
 */

    public function blogAllPost(){

        $all_posts = PostModel::where('status', true)->latest()->get();
        $categories = Category::where('status', true)->take(5)->latest()->get();

       // $categories = Category::where('select * from `categories` where `status` = 1 order by id desc');
        $tags = Tag::all();

        return view('admin.blog.all_blog', [

            'all_data' => $all_posts,
            'all_categories' => $categories,
            'all_tag' => $tags

          ]);
    }


    /**
     * Blog search by search box
     */

    public function blogSearch( Request $request){

               //  echo 'Test for search ';

              //   return $request->all();


                if(empty($request->search)) {
                    $search = '';
                } else{
                    $search = $request->search;
                }



                $posts = PostModel::where('post_title','LIKE','%'. $search .'%') ->orwhere('post_content', 'LIKE', '%'.$search.'%') ->latest()->get();

                $categories = Category::where('status',  true)->take(5)->latest()-> get();
                $tags = Tag::all();

                return view('admin.blog.blog_search', [
                    'all_data' =>$posts,
                    'all_categories' => $categories,
                    'all_tag' => $tags

              ]);

//              echo "pre";
//              print_r($posts);
//              echo "pre";
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        //return $request ->all();

            $post_info = PostModel::create([
            'post_type' => $request ->post_type,
            'post_title' => $request ->post_title,
            'post_slug' => Str::slug($request->post_title),
            'post_content' => $request->post_content,
            'special_link'=> $request->special_link,
            'user_role' => $request->user_role

        ]);


        //Single Image Upload

        if ($request ->hasFile('post_image')){

            $img = $request ->file('post_image');
            $image_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img ->move(public_path('photos/'), $image_name);


            $post_info ->image()->create([
                'path' => $image_name
            ]);
        }



        //Multiple Image Upload

        if ($request->hasFile('image_gallery')){

            $img = $request->file('image_gallery');

            foreach ($img as $image){

                $image_name = md5(rand().time()).'.'.$image->getClientOriginalExtension();

                $image ->move(public_path('photos/'), $image_name);

                $post_info->image()->create([
                    'path'=> $image_name
                ]);
            }

        }//end if


      //Upload Multiple Vedio Link


        if($request->hasFile('vedio_link')){

            $vedioes = $request->file('vedio_link');

            foreach ($vedioes as $vedio){

                $unique_vedio_name = md5(rand().time()).'.'.$vedio->getClientOriginalExtension();

                $vedio->move(public_path('photos/'), $unique_vedio_name);

                $post_info -> image()->create([
                   'path' => $unique_vedio_name
                ]);


            }

        }



        $post_info -> categories()->attach($request->post_category);
        $post_info -> tags() -> attach($request ->post_tag);

        return redirect()-> back();

    }





    //Backup Image Upload for Single Image


//    public function store(Request $request)
//    {
//
//       $post_info = PostModel::create([
//           'post_type' => $request ->post_type,
//           'post_title' => $request ->post_title,
//           'post_slug' => Str::slug($request->post_title),
//           'post_content' => $request->post_content,
//           'special_link'=> $request->special_link,
//           'user_role' => $request->user_role
//
//       ]);
//
//
//       if ($request->hasFile('post_image')){
//
//           $img = $request->file('post_image');
//
//            foreach ($img as $image){
//
//                $image_name = md5(rand().time()) . '.'.$image->getClientOriginalExtension();
//
//                $image -> move(public_path('photos/',$image_name));
//
//                $post_info->image()->create([
//                   'path'=> $image_name
//                ]);
//            }
//
//       }//end if
//
//
//
//        $post_info -> categories()->attach($request->post_category);
//        $post_info -> tags() -> attach($request ->post_tag);
//
//        return redirect()-> back();
//
//    }
//
//

   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//    public function show($id)
//    {
//       $single_page = PostModel:: find($id);
//       return view('admin.post.show', compact('single_page'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function showSinglePage($id){

         //$all_posts = PostModel::all();

         $all_posts = PostModel::where('status', true)->orderBy('views','DESC')->take(3)->latest()->get();

         $categories = Category::all();

         $subcategoris = Subcategory::all();

         $single_post = PostModel::find($id);

         $current_date_post = PostModel::whereDate('created_at', today())->take(3)->latest()->get();

           return view('admin.post.blog_single', compact('single_post', 'categories', 'subcategoris', 'all_posts', 'current_date_post' ));

//         return view('admin.post.blog-post-sidebar-left', compact('single_post', 'categories', 'subcategoris', 'all_posts', 'current_date_post' ));

    }

    public function postBlogPage($id){
       // echo $id;
        $single_blog = PostModel::find($id);

        return view('admin.post.blog-post', compact('single_blog'));
    }




}
