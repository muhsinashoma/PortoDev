<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        //From category, index view will be displayed

       $all_cat =  Category::latest()->get();

        return view('category.index', [
            'all_cat' => $all_cat
        ] );
    }

//    public function index()
//    {
//        // Single Data showing . From category, index view will be displayed  and use hasOne
//
//     //return $this -> hasOne(Post::class, 'category_id','id');

//
//        $all_cat =  Category::latest()->get();
//
//        $politics = Category::find(1);
//
//        return view('category.index', [
//            'all_cat' => $all_cat,
//            'pol'   => $politics
//        ] );
//    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request -> all();

        Category::create([

            'name' => $request -> name,
            'slug' => Str::slug($request -> name),
        ]);

        return redirect() -> route('category.index');

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
