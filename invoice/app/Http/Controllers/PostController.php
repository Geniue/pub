<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocationResource;
use App\Models\Post;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index(){
        $user=Auth::user();
        $posts = Post::all();
        $posts = $posts->map(function($post){
            $location = Location::find( $post->location_id);
            $newPost = [
                'id' => $post->id,
                'title' => $post->title,
                'body' => base64_decode($post->body) ,
                'publish_date' => $post->publish_date->format('Y-m-d'),
                'image' => $post->image,
                'image_title' => $post->image_title,
                'image_title_tag' => $post->image_title_tag,
                'image_alt' => htmlentities($post->image_alt, ENT_QUOTES, 'UTF-8', false),
            ];
            if($location){
                $newPost['location_name'] = $location->name;
                $newPost['location_id'] = $location->id;
            }
            return (object) $newPost;
        });
        $locations = LocationResource::collection(Location::all());
        return view('posts.index',compact('posts','locations','user'));
    }

    public function store(Request $request){
		$posts_latest_id = POST::orderBy('id', 'desc')->get()[0]->id;
        $post = new Post();
		$post->id = $posts_latest_id + 1;
        $post->title = $request->title;
        $post->image_title = $request->image_title;
        $post->image_title_tag = $request->image_title_tag;
        $post->image_alt = htmlentities($request->image_alt, ENT_QUOTES, 'UTF-8', false);
        $post->body = $request->body;
        $post->publish_date = Carbon::parse($request->publish_date)->toDateString();
        $post->location_id = $request->location_id;
        if($request->hasFile('image')) {
            $file_extension = $request->image->getClientOriginalExtension();
            $filename = (!empty($post->image_title) ? Str::slug($post->image_title, '-') : Str::random(50)).'.'. $file_extension;
            \Storage::disk('posts')->put($filename, \File::get($request->image));
            $post->image = $filename;
        }
        $user=Auth::user();
        $post->save();
        if($user->is_admin==1) {
            return redirect()->back()->with(['message'=>'Post created successfully','status'=>'success']);
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Add New post','status'=>'info']);
        }
    }

    public function update(Request $request){
        $user=Auth::user();

        if($user->is_admin==1) {
            $imageTitle = $request->image_title;
			
            $post = Post::where('id',$request->id)->first();
			$post->image_title_tag = $request->image_title_tag;
            $post->title = $request->title;
            $post->body = $request->body;
            $post->publish_date = Carbon::parse($request->publish_date)->toDateString();
            $post->location_id = $request->location_id;
            $post->image_alt = htmlentities($request->image_alt, ENT_QUOTES, 'UTF-8', false);
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $file_extension = $request->image->getClientOriginalExtension();
                $filename = (!empty($post->image_title) ? Str::slug($post->image_title, '-') : Str::random(50)).'.'. $file_extension;
                \Storage::disk('posts')->put($filename, \File::get($request->image));
                $post->image = $filename;
            }
            $fileName = '';
            if($post->image_title !== $imageTitle){
                $post->image_title = $imageTitle;
                if(\Storage::disk('posts')->exists($post->image)){
                    $path = \Storage::disk('posts')->path($post->image);
                    $ext = pathinfo($path, PATHINFO_EXTENSION);
                    $img_file = Str::slug($imageTitle, '-').'.'.$ext;
                    \Storage::disk('posts')->move($post->image, $img_file);
                    $post->image =  $img_file;
                }
//                if(\Storage::disk('posts')->exists($post->image)){
//                    \Storage::disk('posts')->delete($post->image);
//                }
            }
            $post->save();
            return redirect()->back()->with(['message'=>'Post Update Successfully ','status'=>'success']);
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Add New Post','status'=>'info']);
        }
    }

    public function destroy($id) {
        $user=Auth::user();
        $post = Post::where('id', $id)->firstorfail()->delete();
        return redirect()->back()->with(['message'=>'Post deleted successfully.','status'=>'info']);
    }
}
