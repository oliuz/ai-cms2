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

    public function delete(Request $request)
    {
        $manga = Manga::find($request->input('id'));

        if ($manga) {
            $manga->delete();

            return response()->json(['success' => true ]);
        }

        return response()->json(['success' => false ]);
    }

    public function update(Request $request)
    {
        $manga = Manga::find($request->input('id'));

        if ($manga) {
            $manga->title = $request->input('title');
            $manga->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
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
}
