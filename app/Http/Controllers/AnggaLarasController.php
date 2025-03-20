<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Guess;
use Illuminate\Http\Request;

class AnggaLarasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.angga-laras', [
            'name' => 'Nama Tamu'
        ]);
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
        // $newComment = [
        //     'name' => $request->name,
        //     'attendace' => $request->attendance,
        //     'message' => $request->message
        // ];
        // dump($newComment);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $guessSlug = Guess::where('slug', $slug)->first();
        return view('pages.angga-laras', [
            'name' => $guessSlug->name
        ]);
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
