<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategoris = Subcategory::all();
        return view(   'admin.subcategory.index', [
            'all_data' =>$subcategoris
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
      //return $request ->all();

       $subcategory_info =  Subcategory::create([
            'sub_cate_name' => $request->sub_cate_name,
            'sub_cate_slug' => Str::slug($request->sub_cate_name),
            'user_role_id'  => $request->user_role_id
        ]);

        if($request->hasFile('sub_cate_image')){
            $img = $request->file('sub_cate_image');
            $image_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('photos/'), $image_name);


            $subcategory_info->image()->create([
               'path' =>$image_name
            ]);
        }



        return redirect() ->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }
}
