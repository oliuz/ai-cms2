<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        return view('manga.index');
    }

    public function top()
    {
        return view('manga.top');
    }

    public function delete($id)
    {
        return response()->json([]);
    }

    public function update($id, Response $response)
    {
        return response()->json([]);
    }

    public function store(Response $response)
    {
        return response()->json([]);
    }

    public function create()
    {
        return view('manga.create');
    }

    public function edit($id)
    {
        return view('manga.edit');
    }
}
