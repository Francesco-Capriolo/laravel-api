<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('categories')->paginate(12);

        return response()->json($posts); //$ oppure json(compact('posts'))
            /* // £ usare questo metodo per quando si fa ::all()  [
                'success' => true,
                'result'=> $post,
            ]); */
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
     * @param  int  $id //$ dependency injection: Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($id) //$ show(Post $post)
    {
        $post=Post::findOrFail($id);//$ non scrivere la riga 46 e cambiare sulla route api {$post} al posto {$id}
        return response()->json( // £ si può scrive anche json($post)
            [
                'success' => true,
                'results'=> $post,
            ]);
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
     * @param  int  $id //! dependency injection Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//! dependency injection
    {
        Post::destroy($id); //! oppure ($post) con la dependency injection
        return response('',204);
    }
}
