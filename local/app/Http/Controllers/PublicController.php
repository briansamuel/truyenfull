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
        $hot_stories = DB::table('stories')
            ->orderBy('view_month','desc')
            ->offset(0)
            ->limit(13)
            ->get();
        $last_chapters = DB::table('stories')
            ->join('chapters', 'stories.last_chapter', '=', 'chapters.chapter_id')
            ->select('stories.id','stories.story_title','chapters.chapter_serial','chapters.chapter_title','stories.story_thumbnail','stories.story_slug','chapters.chapter_id')
            ->orderBy('stories.chapter_update_at','desc')
            ->offset(0)
            ->limit(25)
            ->get();
        $full_stories = DB::table('stories')
            ->where('story_status','Full')
            ->offset(0)
            ->limit(12)
            ->get();
        foreach ($last_chapters as $last_chapter ) {
            $last_chapter->term = $terms::listTermbyStory($last_chapter->id);
        }
        //echo $last_chapters;
        return view('public/index')->with("last_chapters", $last_chapters)->with("hot_stories", $hot_stories)->with("full_stories", $full_stories);
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

    public function chapterPage($slug,$serial)
    {
        
        $chapter = DB::table('stories')
        ->join('chapters', 'stories.id', '=', 'chapters.story_parent')
        ->where('stories.story_slug',$slug)
        ->where('chapters.chapter_serial',$serial)
        ->first();
        return view('public/chapter')->with("chapter", $chapter);
        //echo $last_chapters;
        
    }

    public function termPage()
    {
        
        $stories = DB::table('stories')
         ->join('chapters', 'stories.last_chapter', '=', 'chapters.chapter_id')
        ->where('stories.story_status','Full')
        ->paginate(25);
        foreach ($stories as $key => $story) {
            $thumb = $story->story_thumbnail;
            $story->story_thumbnail = "http://localhost/truyenfull/static/cropimage?url=".$thumb;
        }
        return view('public/term')->with("stories", $stories);
        //echo $last_chapters;
        
    }
<<<<<<< HEAD

    public function categoryPage($slug)
    {
        
        $stories = DB::table('stories')
         ->join('chapters', 'stories.last_chapter', '=', 'chapters.chapter_id')
        ->join('term_relationships', 'stories.id', '=', 'term_relationships.story_id')
        ->join('terms', 'terms.term_id', '=', 'term_relationships.term_id')
        ->where('terms.term_slug','tien-hiep')
        ->paginate(25);

        foreach ($stories as $key => $story) {
            $thumb = $story->story_thumbnail;
            $story->story_thumbnail = "http://localhost/truyenfull/static/cropimage?url=".$thumb;
        }
        return view('public/term')->with("stories", $stories);
        //echo $last_chapters;
        
    }

=======
>>>>>>> origin/master
    public function testPage()
    {
        $url = "http://static.truyenfull.vn/poster/n2/QWJ4NzhWQUZmRkcxcTBldypGYVZaejBpX0deRmYqQCp2VmtBYUxNMm0xMW96TDBSfFZGTjBOflZSX0RWU1d8NUVVeypCWTBWTFVFUnRTMDlaJF1BM1F6KnZXRl1VVUUqSlR*SltPRCpMKTBwS05GOUtNMVJOUlUwMVpEJHAjVEJCU1UkM1IxcHhXWyg1JFs0NVMwOXlaejEzTX5FMUxXXnpNfkk9/hai-ba-chuyen-o-duoc-vuong-coc.jpg";
        return $this->Thumbnail($url,182,80);
    }
    public function cropPage()
    {
        $url = $_GET['url'];
        return $this->Thumbnail($url,182,80);
    }
    function Thumbnail($url, $width = 150, $height = true) {

     // download and create gd image
     $image = ImageCreateFromString(file_get_contents($url));

     // calculate resized ratio
     // Note: if $height is set to TRUE then we automatically calculate the height based on the ratio
     $height = $height === true ? (ImageSY($image) * $width / ImageSX($image)) : $height;

     // create image 
     $output = ImageCreateTrueColor($width, $height);
     ImageCopyResampled($output, $image,  0, 0, 0, 0, 180, 182, 200, 330);
     // Set the content type header - in this case image/jpeg
     header('Content-Type: image/jpeg');
     // save image
     imagejpeg($output, NULL, 95); 

     // return resized image
     imagedestroy($im);

    }
}
