<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display a listing of posts
    public function index()
    {
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }

    // Display the homepage with all posts
    public function home()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        // Validate the inputs, including image file (max 2MB and must be an image)
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => 'image|nullable|max:1999',
        ]);

        // Create a new Post instance and assign the values
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;

        // Check if an image is uploaded
        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $image = $request->file('image');

            // Create a unique name for the image with time() to avoid name conflicts
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Define the storage path
            $storagePath = public_path('images');

            // Move the image to the specified storage path
            $image->move($storagePath, $imageName);

            // Save the image path in the database
            $post->image = 'images/' . $imageName;
        }

        // Save the post to the database
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    // Show the form for editing the specified post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Update the specified post in storage
    public function update(Request $request, Post $post)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => 'image|nullable|max:1999',
        ]);

        // Update the post attributes
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->author = $request->input('author');

        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $storagePath = public_path('images');

            // Move the new image to the 'images' directory
            $image->move($storagePath, $imageName);

            // Save the path to the image in the database
            $post->image = 'images/' . $imageName;
        }

        // Save the updated post
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    // Show the details of a specific post
    public function show($id)
    {
        $post = Post::findOrFail($id); // Fetch the post by its ID
        return view('posts.detail', compact('post')); // Return the view with the post data
    }

    // Remove the specified post from storage
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
