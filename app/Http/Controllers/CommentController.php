<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  App\Models\Comment::latest() ->get();

        return view('view.name', [
         'all_data' => $data
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }



    public function postComment(Request $request){
       // return  $request->all();
        Comment::create([
            'post_model_id' =>$request->post_model_id,
            'user_id'=>Auth::user()->id,
            'comment_text'=>$request->comment
        ]);

        return redirect() ->back()->with('success', 'The comment has been posted successfully');
    }


    public function addPostReply(Request $request){

       // return $request->all();

        Comment::create([
            'post_model_id' =>$request->post_id,
            'comment_id' =>$request->comment_id,
            'user_id' =>Auth::user()->id,
            'comment_text' =>$request->reply_text
        ]);


        return redirect()->back()->with('success', 'The comment has been posted successfully');

    }


}
