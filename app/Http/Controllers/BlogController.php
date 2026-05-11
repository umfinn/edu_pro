<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = [
            ['title' => 'My First Blog Post', 'content' => 'This is the content of my first blog post.', 'time' => '2024-06-01 10:00:00'],
            ['title' => 'Another Day, Another Post', 'content' => 'Here is some more content for another blog post.', 'time' => '2024-06-02 14:30:00'],
            ['title' => 'Laravel is Awesome!', 'content' => 'I am loving Laravel for building web applications.', 'time' => '2024-06-03 09:15:00'],
        ];
        return view('home', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
