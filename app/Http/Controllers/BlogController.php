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
            ['title' => '1st test PD', 'content' => 'Awesome.', 'time' => '2026-05-01 10:00:00'],
            ['title' => '2nd test skolfolk', 'content' => 'More awesome.', 'time' => '2026-05-02 14:30:00'],
            ['title' => '3rd test ???', 'content' => 'What can it be???.', 'time' => '2026-05-03 09:15:00'],
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
