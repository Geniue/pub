<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable = [
        'title', 'content', 'slug', 'summary', 'meta_description','meta_keywords','image'
    ];
	//  'title', 'content', 'slug', 'summary', 'meta_description','meta_keywords','image', 'image_alt','image_title','image_thumb_alt', 'image_thumb_title'

    public static function getBlogDetails($where = array())
    {

        $query = DB::table('blog');
        $query->select();
        foreach ($where as $key => $value)
            {
                $query->where($key, $value);
            }
        $result = $query->get();
        return $result->toArray();
    }
    public function thumb(){
        return 'asdf';
    }
}
