<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $casts = [
        'publish_date' => 'datetime:Y-m-d',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'publish_date',
        'location_id',
        'image',
        'image_title',
        'image_alt',
		'image_title_tag'
    ];



    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
