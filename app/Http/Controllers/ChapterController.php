<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Manga;

class ChapterController extends Controller
{
    public function list(Request $request)
    {
        $manga = Manga::find($request->input('id'));

        if ($manga) {
            $data = $manga->chapters;

            return response()->json(['success' => true, 'data' => $data]);
        }

        return response()->json(['success' => false, 'message' => 'Manga Not Found']);
    }

    public function store(Request $request) 
    {
        try {
            $manga = Manga::find($request->input('id'));

            if ($manga) {
                $chapter_order = $manga->chapters->max('chapter_order');
                $chapter_order++;

                $chapter = new Chapter;
                $chapter->id_manga = $request->input('id');
                $chapter->chapter_title = $request->input('title');
                $chapter->chapter_order = $chapter_order;
                $chapter->save();

                return response()->json(['success' => true]);
            }
            
            return response()->json(['success' => false, 'message' => 'Manga Not Found']);
        } catch (\Exception $ex) {
            return response()->json(['success' => false, 'error' => $ex]);
        }
    }

    public function update(Request $request)
    {
        //
    }

    public function delete(Request $request)
    {
        //
    }
}
