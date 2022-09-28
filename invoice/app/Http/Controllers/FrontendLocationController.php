<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Location;
use App\Models\Post;
use App\Models\Seo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FrontendLocationController extends Controller
{
    public function index($location){
        $data=Location::where('url',$location)->first();
        $title = base64_decode($data->title);
        $seo = new Seo();
        $data->title = base64_decode($data->title);
        $data->description = Str::markdown(base64_decode($data->description));
        $data->service_html = !empty($data->service_html) ? unserialize( $data->service_html) : [];
        $data->cta_title = base64_decode($data->cta_title);
        $data->address = Str::markdown(base64_decode($data->address));
        $data->list_items = !empty($data->list_items) ? explode("\n", str_replace("\r", "",  base64_decode($data->list_items))) : [];
        $data->gallery_images = !empty($data->gallery_images) ? unserialize( $data->gallery_images) : [];
        $data->review_html = !empty($data->review_html) ? unserialize( $data->review_html) : [];
        $data->post_items = !empty($data->post_items) ? unserialize( $data->post_items) : [];
        $seo->site_title = $data->seo_title;
        $seo->site_description = $data->seo_description;
        $seo->site_keywords = $data->seo_keywords;
        $posts = Post::where('location_id',$data->id)->orderBy('created_at','DESC')
            ->get();
        $seo->setDefalutValues();
        return view('business_location.index',compact('data','posts','seo', 'location'));
    }
}
