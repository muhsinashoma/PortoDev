<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return view('admin.category.index');

        $subcategoris = Subcategory::all();

        $categories = Category::all();


       return view('admin.category.index', [
          'all_data' => $categories,
           'sub_categories'=> $subcategoris

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
        //  return $request ->all();

            $category_info = Category::create([
            'cate_name' => $request ->cate_name,
            'cate_slug' => Str::slug($request->cate_name),
            'user_role_id' =>$request ->user_role_id
        ]);


           if($request ->hasFile('cate_image')){

                  $img = $request ->file('cate_image');
                  foreach ($img as $image){

                   $image_name = md5(time().rand()).'.'.$image->getClientOriginalExtension();
                   $image->move(public_path('photos/'),$image_name);

                      $category_info ->image()->create([
                       'path' =>$image_name
                   ]);

               } //endforeach

           }//endif


//        if(isset($request ->sub_cate)){

        $category_info -> subcategories()->attach($request ->sub_category_id);

        return redirect()-> back();

//         }


       //for single image one to one
//          if($request ->hasfile('cate_image')){
//
//              $img = $request ->file('cate_image');
//              $image_name = md5(time().rand()).'.'.$img -> getClientOriginalExtension();
//              $img ->move(public_path('photos/'), $image_name);
//
//
//              $cagetory_info ->image() ->create([
//                  'path' => $image_name
//              ]);
//
//          }







    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
