<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    //
    protected $table = 'terms';

    protected $fillable = [
        
       	
    ];
    public $timestamps = false;
    public static function AllCategoriesHTML()
    {
        $html = '<ul id="listCategorieshmtl">';
        $categories = DB::table('terms')->where('term_type', 'category')->where('term_parent', 0)->get();
        foreach ($categories as $category) {
            $html .= '<li>
                    <label>
                    <input name="categories[]" type="checkbox" id="'.$category->term_id.'" value="'.$category->term_id.'" > '.$category->term_name.'
                    </label>';
            $subcategories = DB::table('terms')->where('term_type', 'category')->where('term_parent', $category->term_id)->get();
            $html .= '<ul id="sublistCategorieshmtl">';
            foreach ($subcategories as $subcategory) {
                $html .= '<li>
                        <label>
                        <input name="categories[]" type="checkbox" id="'.$subcategory->term_id.'" value="'.$category->id.'"> '.$subcategory->term_name.'
                        </label>';
                $subcategories = DB::table('term_taxonomy')->where('taxonomy', 'category')->where('parent', $category->term_id)->get();
                $html .= '</li>';
            }
            $html .= '</ul>';
            $html .= '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
    public static function findTermbyName($name)
    {
         $categories = DB::table('terms')->where('term_name', $name)->first();
         if(isset($categories))
         {

            return $categories->term_id;
         }
         else
         {
            return false;
         }

    }
    public static function listTermbyStory($id)
    {
        $html = '';
        $cate_array = array();
        $categories = DB::table('term_relationships')
        ->join('terms', 'terms.term_id', '=', 'term_relationships.term_id')
        ->select('terms.term_id','terms.term_name','term_relationships.story_id','terms.term_slug')
        ->where('term_relationships.story_id', $id)->get();
        $count = 1;
        foreach ($categories as $category) {
            if($count < 3)
            {
                array_push($cate_array, ' <a itemprop="genre" href="theloai/'.$category->term_slug.'">'.$category->term_name.'</a>');
            }
            $count++;
        }
        $html = implode(',',$cate_array);
        return $html;
    }
}
