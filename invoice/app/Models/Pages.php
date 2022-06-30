<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pages extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $fillable = [
        'page_name','status'    
    ];

    public static function getPagesDetails($where = array()) 
    {
        
        $query = DB::table('pages');
        $query->select();
        foreach ($where as $key => $value) 
            {
                $query->where($key, $value);
            }
        $result = $query->get();
        return $result->toArray();
    }
}
