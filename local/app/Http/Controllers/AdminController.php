<?php

namespace App\Http\Controllers;
use DB;
use App\Stories;
use App\Chapters;
use App\Terms;
use App\Term_Relationships;
use Illuminate\Http\Request;
use App\Http\Requests\CheckStoryRequest;
use Carbon\Carbon;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/content');
    }

    public function chaptersAction()
    {
        if(isset($_GET['action']))
        {
            
            if($_GET['action'] == 'allchapter')
            {
                return $this->listschapters();
            }
            else if($_GET['action'] == 'addchapter')
            {
                return view('admin/chapter/addchapter');
            }
            else if($_GET['action'] == 'editchapter')
            {
                if(isset($_GET['chapter_id']))
                {
                     return $this->editchapter($_GET['chapter_id']);
                }
               
            }
               
        }
        else
        {
            return $this->listchapters();
        }
        
    }

    public function storiesAction()
    {
        if(isset($_GET['action']))
        {
            
            if($_GET['action'] == 'allstory')
            {
                return $this->liststories();
            }
            else if($_GET['action'] == 'addstory')
            {
                return $this->addstory();
            }
            else if($_GET['action'] == 'editstory')
            {
                if(isset($_GET['story_id']))
                {
                     return $this->editstory($_GET['story_id']);
                }
               
            }
               
        }
        else
        {
            return $this->liststories();
        }
        
    }
    
    public function categoriesAction()
    {
        if(isset($_GET['action']))
        {
            
            if($_GET['action'] == 'allstory')
            {
                return $this->liststories();
            }
            else if($_GET['action'] == 'addcategory')
            {
                $categories = Terms::orderBy('term_id', 'desc')->get();
                return  view('admin/term/addcategory')->with('categories',$categories);
            }
            else if($_GET['action'] == 'editstory')
            {
                if(isset($_GET['story_id']))
                {
                     return $this->editstory($_GET['story_id']);
                }
               
            }
               
        }
        else
        {
            return $this->liststories();
        }
        
    }

    public function liststories()
    {
        $html = '';
        $stories = Stories::orderBy('created_at', 'desc')->get();
        foreach ($stories as $story) {
            //$categoriesHTML = Categories::getCategoriesbyID($article->id);
            $html .= '<tr>
                <th>
                <input data-check="'.$story->id.'" type="checkbox" name="remember">
                </th>
                <td>'.$story->id.'</td>
                <td><a href="admin/story?action=editstory&story_id='.$story->id.'">'.$story->story_title.'</a></td>
                <td>'.$story->story_author.'</td>
                <td></td>
                <td></td>
                <td>'.$story->created_at->format('d/m/Y').'</td>
                                  
             </tr>';
              
        }
        return view('admin/story/allstory')->with("articleshtml", $html);
    }

    public function addstory()
    {
        $html = Terms::AllCategoriesHTML();
        return view('admin/story/addstory')->with("html", $html);
    }
    public function editstory($id)
    {
        $html = Terms::AllCategoriesHTML();
        $story = Stories::getStorybyId($id)->first();
        $data = array(
            'story'  => $story,
            'html'   => $html,
        );

        return view('admin/story/editstory')->with($data);
    }

    public function test()
    {
        $last_chapters = DB::table('stories')
            ->join('chapters', 'stories.last_chapter', '=', 'chapters.chapter_id')
            ->select('stories.story_title','chapters.chapter_serial','chapters.chapter_title','stories.story_thumbnail','chapters.chapter_id')
            ->orderBy('stories.chapter_update_at','desc')
            ->offset(0)
            ->limit(20)
            ->get();
        echo $last_chapters;

    }
    public function AutogetTerm()
    {
        include_once(app_path() . '\Libraries\simple_html_dom.php');
     
        $url = 'http://truyenfull.vn/nga-duc-phong-thien/';
        $html_story = $this->CurlHTML($url);
        $html_story = str_get_html($html_story);
        $terms = array();

        
    }
    public function AutogetTerm2()
    {
        ini_set('max_execution_time', 800);
        $url = 'http://truyenfull.vn/';
        $html = $this->CurlHTML($url);
        $html = str_get_html($html);
        $elements = $html->find('.dropdown-menu a');
        foreach ($elements as $element)
        {
            $title = '';
            $keywords = '';
            $description = '';
            $name =  $element->plaintext;
            $terms = new Terms;
            $terms->term_name = $name;
            $html2 = $this->CurlHTML($element->href);
            $html2 = str_get_html($html2);
            foreach($html2->find('meta[name=keywords]') as $element)
                $keywords = $element->content;
            foreach($html2->find('meta[name=description]') as $element)
                $description = $element->content;
            foreach($html2->find('title') as $element)
                $title = $element->plaintext;
            $terms->term_title = $title;
            $terms->term_keyword = $keywords;
            $terms->term_description = $description;
            $terms->term_slug = str_slug($name);
            $terms->term_type = 'category';
            $terms->save();
        }
    }
    public function AutoAddStory($url,$title,$excerpt,$description,$keywords,$author,$thumbnail,$status,$terms)
    {
        $stories = new Stories;
        $stories->story_title = $title;
        $stories->story_excerpt = $excerpt;
        $stories->story_description = $description;
        $stories->story_keyword = $keywords;
        $stories->story_author = $author;
        $stories->story_thumbnail = $thumbnail;
        $stories->story_status = $status;
        $stories->story_slug = str_slug($title);
        $result = $stories->save();
        if($result)
        {
            foreach ($terms as $term) {
                 $categories = new Terms;
                 $term_id = $categories::findTermbyName($term);
                 $term_ship = new Term_Relationships;
                 $term_ship->term_id = $term_id;
                 $term_ship->story_id = $stories->id;
                 $term_ship->save();
            }
            $html = $this->CurlHTML($url);
            $html = str_get_html($html);
            $story_array_url = array();
            $elements = $html->find('#list-chapter .row a ');
            foreach ($elements as $element)
                array_push($story_array_url, $element->href);
            $arrayResult = array('list_chapter' => $story_array_url,'message' => $title.' - Tạo truyện thành công ','id' => $stories->id,'term' => $terms );
            echo json_encode($arrayResult);

        }
    }
    public function CurlHTML($url)
    {
        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_USERAGENT, "booyah!");
        curl_setopt($c, CURLOPT_HEADER, 0);
        curl_setopt($c,CURLOPT_FOLLOWLOCATION,true);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
        //curl_setopt(... other options you want...)
        $html = curl_exec($c);
        if(curl_exec($c) === false)
        {
            echo 'Curl error: ' . curl_error($c);
        }
        else
        {
            return $html;
        }
        // Get the status code
        
        curl_close($c);
    }

    public function ajaxGetstory(Request $request)
    {
        include_once(app_path() . '\Libraries\simple_html_dom.php');
        $data = $request->all(); // This will get all the request data.
        $url = $data['url'];
        $html = $this->CurlHTML($url);
        $html = str_get_html($html);
        $story_array_url = array();
        $elements = $html->find('.truyen-title a ');
        foreach ($elements as $element)
            array_push($story_array_url, $element->href);
        echo json_encode($story_array_url);
    }
    public function ajaxAddstory(Request $request)
    {   
        include_once(app_path() . '\Libraries\simple_html_dom.php');
        $data = $request->all(); // This will get all the request data.
        $url = $data['url'];
        $html_story = $this->CurlHTML($url);
        $html_story = str_get_html($html_story);
        $title = "";
        $excerpt = "";
        $description = "";
        $keywords = "";
        $author = "";
        $thumbnail = "";
        $status = "";
        $terms = array();
        foreach($html_story->find('h3.title') as $element) {

            $title = $element->innertext;
            if (isset($title)) {
                break;
            }
        }
        foreach($html_story->find('meta[name=keywords]') as $element) {
            $keywords = $element->content;
            if (isset($keywords)) {
                break;
            }

        }
        foreach($html_story->find('meta[name=description]') as $element) {
            $description  = $element->content;
            if (isset($description)) {
                break;
            }

        }
        foreach($html_story->find('.desc-text') as $element) {
            $excerpt = $element->innertext;
            if (isset($excerpt)) {
                break;
            }
        }
        foreach($html_story->find('.text-success') as $element) {
            $status = $element->plaintext;
            if (isset($status)) {
                break;
            }
        }
        foreach($html_story->find('.info a[itemprop="author"]') as $element) {
            $author = $element->innertext;
            if (isset($author)) {
                break;
            }
        }
        foreach($html_story->find('.books img') as $element) {

            $thumbnail = $element->src;
            if (isset($thumbnail)) {
                break;
            }
        }
        foreach($html_story->find('.info a[itemprop="genre"]') as $element) {
            
            array_push($terms, $element->innertext);
        }
        $story_title_exist = DB::table('stories')->where('story_title', '=', $title)->first();
        if (is_null($story_title_exist)) {
            $thumbnail = $this->creatThumbbyUrl($thumbnail);
            $this->AutoAddStory($url,$title,$excerpt,$description, $keywords, $author, $thumbnail,$status,$terms);
            // It does not exist - add to favorites button will show
        } else {
            $arrayResult = array('message' => 'Trùng lặp với ID '.$story_title_exist->id,'status' => 'error' );
                    echo json_encode($arrayResult);
        }
            
    }
    public function creatThumbbyUrl($url)
    {
        $name = basename($url);
        $uploadfile = $_SERVER['DOCUMENT_ROOT'] ."/truyenfull/upload/images/Thumbnail/$name";
        $upload = file_put_contents($uploadfile,file_get_contents($url));
        if($upload)
        {
            return 'http://localhost/truyenfull/upload/images/Thumbnail/'.$name;
        }
        else
        {
            return false;
        }
    }
    // Ajax Chapter
    public function AutoAddChapter($serial,$title,$content,$parent)
    {
        $chapters = new Chapters;
        $chapters->chapter_serial = $serial;
        $chapters->chapter_title = $title;
        $chapters->chapter_content = $content;
        $chapters->story_parent = $parent;
        $chapters->chapter_status = 'publish';
        $result = $chapters->save();
        if($result)
        {
            
            $chapter_updated_at = Carbon::now();
            DB::table('stories')
            ->where('id', $parent)
            ->update(array('last_chapter' => $chapters->id,'chapter_update_at' => $chapter_updated_at)); 
            echo $title.' - Đăng thành công <br>';
        }
    }
    public function ajaxGetchapter(Request $request)
    {
        include_once(app_path() . '\Libraries\simple_html_dom.php');
        $data = $request->all(); // This will get all the request data.
        $url = $data['url'];
        $html = $this->CurlHTML($url);
        $html = str_get_html($html);
        $story_array_url = array();
        $elements = $html->find('#list-chapter .row a ');
        foreach ($elements as $element)
            array_push($story_array_url, $element->href);
        echo json_encode($story_array_url);
    }
    public function ajaxAddchapter(Request $request)
    {   
        include_once(app_path() . '\Libraries\simple_html_dom.php');
        $data = $request->all(); // This will get all the request data.
        $url = $data['url'];
        $parent = $data['parent'];
        $html_story = $this->CurlHTML($url);
        $html_story = str_get_html($html_story);
        $title = "";
        $serial = "";
        $content = "";
        foreach($html_story->find('h2') as $element) {

           
            
            $title = $element->plaintext;
            if (isset($title)) {
                break;
            }
        }
        foreach($html_story->find('.chapter-c') as $element) {
            $content = $element->plaintext;
            if (isset($content)) {
                break;
            }

        }
        $returnValue = explode('chuong-', $url);
        $serial = str_replace("/", "", $returnValue[1]);
        $serial = str_replace("-", ".", $serial);
        $this->AutoAddChapter($serial,$title,$content,$parent);
            
    }
}
