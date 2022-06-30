<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $fillable = [
        'title','image'
    ];

    public static function getGalleryDetails($where = array())
    {

        $query = DB::table('gallery');
        $query->select();
        foreach ($where as $key => $value)
        {
            $query->where($key, $value);
        }
        $result = $query->get();
        return $result->toArray();
    }

    public static function get_resize_image($file, $w, $h, $crop=FALSE){
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width-($width*abs($r-$w/$h)));
            } else {
                $height = ceil($height-($height*abs($r-$w/$h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w/$h > $r) {
                $newwidth = $h*$r;
                $newheight = $h;
            } else {
                $newheight = $w/$r;
                $newwidth = $w;
            }
        }
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        return $dst;
    }
}
