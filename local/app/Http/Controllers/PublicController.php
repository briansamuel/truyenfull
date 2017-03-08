<?php

namespace App\Http\Controllers;
use DB;
use App\Terms;
use App\Stories;
use App\Chapters;
use App\Term_Relationships;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function homePage()
    {
        $terms = new Terms;
        $last_chapters = DB::table('stories')
            ->join('chapters', 'stories.last_chapter', '=', 'chapters.chapter_id')
            ->select('stories.id','stories.story_title','chapters.chapter_serial','chapters.chapter_title','stories.story_thumbnail','stories.story_slug','chapters.chapter_id')
            ->orderBy('stories.chapter_update_at','desc')
            ->offset(0)
            ->limit(25)
            ->get();
        foreach ($last_chapters as $last_chapter ) {
            $last_chapter->term = $terms::listTermbyStory($last_chapter->id);
        }
        //echo $last_chapters;
        return view('public/index')->with("last_chapters", $last_chapters);
    }

    public function storyPage($slug)
    {
        
        $story = DB::table('stories')->where('story_slug',$slug)->first();
        if($story)
        {
            return view('public/story')->with("story", $story);
        }
        //echo $last_chapters;
        
    }
}
