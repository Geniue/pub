<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocationResource;
use App\Models\User;
use App\Models\Location;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;


class LocationController extends Controller
{
    public function index(){
        $user=Auth::user();
        $locations = LocationResource::collection(Location::all());
        return view('locations.index',compact('locations','user'));
    }
    public function create(){
        $user=Auth::user();
        if($user->is_admin==1) {
            return view('locations.create',compact('user'));
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Add New Employee','status'=>'info']);
        }
    }


    public function store(StoreLocationRequest $request){
        $location = new Location();
        $location->quote = $request->has('quote') ? 1 : 0;
        $location->name = $request->name;
        $location->title = $request->title;
        $location->url = Str::slug($request->url);
        $location->banner_url = $request->banner_url;
        $location->title = $request->title;
        $location->list_items = $request->list_items;
        $location->heading = $request->heading;
        $location->description = $request->description;

        $location->service_title = $request->service_title;
        $location->service_html = serialize($request->service_html);
        $location->cta_title = $request->cta_title;
        $location->gallery_title = $request->gallery_title;
        $location->description = $request->description;
        $location->gallery_images = serialize($request->gallery_images);
        $location->map_title = $request->map_title;
        $location->address = $request->address;
        $location->map_url = $request->map_url;
        $location->map_image_url = $request->map_image_url;
        $location->review_title = $request->review_title;
        $location->review_html = serialize($request->review_html);
        $location->post_items = serialize($request->post_items);
        $location->seo_title = $request->seo_title;
        $location->seo_description = $request->seo_description;
        $location->seo_keywords = $request->seo_keywords;
        $location->quote_number = $request->quote_number;

        $user=Auth::user();
        $location->save();
        if($user->is_admin==1) {
            return redirect()->back()->with(['message'=>'Location Created Successfully','status'=>'success']);
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Add New Employee','status'=>'info']);
        }
    }

    public function edit($id){
        $user=Auth::user();

        if($user->is_admin==1) {
            $location=Location::where('id',$id)->first();
            return view('locations.edit',compact('location','user'));
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Add New Employee','status'=>'info']);
        }
    }

    public function update(UpdateLocationRequest $request){
        $user=Auth::user();

        if($user->is_admin==1) {

            $location = Location::where('id',$request->id)->first();

            $location->quote = $request->has('quote') ? 1 : 0;
            $location->name = $request->name;
            $location->title = $request->title;
            $location->url = Str::slug($request->url);
            $location->banner_url = $request->banner_url;
            $location->title = $request->title;
            $location->list_items = $request->list_items;
            $location->heading = $request->heading;
            $location->description = $request->description;

            $location->service_title = $request->service_title;
            $location->service_html = serialize($request->service_html);
            $location->cta_title = $request->cta_title;
            $location->gallery_title = $request->gallery_title;
            $location->description = $request->description;
            $location->gallery_images = serialize($request->gallery_images);
            $location->map_title = $request->map_title;
            $location->address = $request->address;
            $location->map_url = $request->map_url;
            $location->map_image_url = $request->map_image_url;
            $location->review_title = $request->review_title;
            $location->review_html = serialize($request->review_html);
            $location->post_items = serialize($request->post_items);
            $location->seo_title = $request->seo_title;
            $location->seo_description = $request->seo_description;
            $location->seo_keywords = $request->seo_keywords;
            $location->quote_number = $request->quote_number;

            $location->save();

            return redirect()->back()->with(['message'=>'Location Update Successfully','status'=>'success']);
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Add New Employee','status'=>'info']);
        }
    }

    public function destroy($id) {
        $user=Auth::user();
        $location = Location::where('id', $id)->firstorfail()->delete();
        return redirect()->back()->with(['message'=>'Location deleted successfully.','status'=>'info']);
    }

}
