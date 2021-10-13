<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostModel;
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

        $all_posts = PostModel::all();
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.index', [
            'all_data' => $all_posts,
            'all_categories' => $categories,
            'all_tags' =>$tags

        ]);
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

       $post_info = PostModel::create([
           'post_type' => $request ->post_type,
           'post_title' => $request ->post_title,
           'post_slug' => Str::slug($request->post_title),
           'post_content' => $request->post_content,
           'special_link'=> $request->special_link,
           'user_role' => $request->user_role

       ]);


       if ($request->hasFile('post_image')){

           $img = $request->file('post_image');

            foreach ($img as $image){

                $image_name = md5(rand().time()) . '.'.$image->getClientOriginalExtension();

                $image -> move(public_path('photos/',$image_name));

                $post_info->image()->create([
                   'path'=> $image_name
                ]);
            }

       }//end if



        $post_info -> categories()->attach($request->post_category);
        $post_info -> tags() -> attach($request ->post_tag);

        return redirect()-> back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
}
