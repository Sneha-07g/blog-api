<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return Post::all();
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

             $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

       
        return Post::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Post::findOrFail($id);
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $post = Post::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'author' => 'sometimes|required|string|max:255',
        ]);
        $post->update($validated);

        return $post;
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $post = Post::findOrFail($id);
        $post->delete();

        // return response()->json(null, 204);
           return response()->json([
            'status' => true,
            'message' => 'Post has been  removed',
            'post'=> $post,
        ], 200);
    }
}
