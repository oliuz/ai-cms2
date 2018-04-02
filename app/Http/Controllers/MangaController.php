<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Manga;

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

    public function list(Request $request)
    {
        $mangas = Manga::paginate(25);

        return response()->json([
            'success' => true,
            'data' => $mangas,
        ]);
    }

    public function delete($id)
    {
        return response()->json([]);
    }

    public function update($id, Request $request)
    {
        return response()->json([]);
    }

    public function store(Request $request)
    {
        try {
            $manga = new Manga;
            $manga->id_uploader = Auth::guard('api')->user()->id;
            $manga->title = $request->input('title');
            $manga->save();

            return response()->json(['success' => true ]);
        } catch (\Exception $ex) {
            return response()->json(['success' => false, 'error' => $ex]);
        }
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
