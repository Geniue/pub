<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $casts = [
        'quote' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'url',
        'banner_url',
        'list_items',
        'quote',
        'heading',
        'description',
        'service_title',
        'service_html',
        'cta_title',
        'gallery_title',
        'map_title',
        'address',
        'map_url',
        'map_image_url',
        'review_title',
        'gallery_images',
        'review_html',
        'post_items',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'quote_number',
    ];
    protected $attributes = [
        'quote' => 0,
    ];
}
