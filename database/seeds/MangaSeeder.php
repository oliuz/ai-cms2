<?php

use Illuminate\Database\Seeder;
use App\Models\Manga;
use App\Models\Chapter;
use App\Models\Page;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manga = new Manga;
        $manga->id_uploader = 1;
        $manga->title = "manga test";
        $manga->slug = "manga-test";
        $manga->save();

        $chapter = new Chapter;
        $chapter->id_manga = $manga->id;
        $chapter->chapter_order = 1;
        $chapter->chapter_title = "Chapter first";
        $chapter->save();

        for ($i=0; $i < 10; $i++) { 
            $page = new Page;
            $page->id_chapter = $chapter->id;
            $page->page_order = $i;
            $page->page_path = $i . '.jpg';
            $page->save();
        }
    }
}
