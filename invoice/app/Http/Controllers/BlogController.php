<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use DB;
use Image;
class BlogController extends Controller
{
    //


    public function index()
    {
        $user=Auth::user();
        if(Auth::user()->is_admin==1){
            //$post=Post::with('getPostDetails')->get();
            $posts = Blog::orderBy('created_at', 'desc')->get();
            foreach ($posts as $post){
                $ext = pathinfo(env('BASE_URL').$post->image, PATHINFO_EXTENSION);
                $post->thumb =  str_replace('.'.$ext,'_thumb.'.$ext,$post->image);
                $post->summary =  \Str::limit($post->summary , 100, ' ...');
                $post->meta_keywords =  \Str::limit($post->meta_keywords , 100, ' ...');
            }
        }
       return view('blog.index',compact('posts','user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
			$prevPost = DB::table('blog')->latest()->get();
            $post=new Blog;
			$post->id = $prevPost[0]->id + 1;
            $post->title=$request->title;
            $post->slug=$request->slug;
            $post->content=$request->content;
            $post->summary=$request->summary;
            $post->meta_description=$request->meta_description;
            $post->meta_keywords=$request->meta_keywords;
            $post->slug=$request->slug;
            $post->image_alt=$request->image_alt;
            $post->image_title=$request->image_title;
            $post->image_thumb_alt=$request->image_thumb_alt;
            $post->image_thumb_title=$request->image_thumb_title;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $file_extension = $request->image->getClientOriginalExtension();
                $filename = $post->slug.'.'. $file_extension;
                $thumbname = pathinfo($filename, PATHINFO_FILENAME).'_thumb.'.$file_extension;

                $destinationPath = \Storage::disk('blog')->path('/');
                $thumbnailImage = Image::make($image->getRealPath());
                $thumbnailImage->resize(350,270)->save($destinationPath.'/'.$thumbname);
                $image->move($destinationPath.'/', $filename);
              $post->image = '/blog/uploads/'.$filename;
            }
            $post->save();

            return redirect()->back();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function update(Request $request,$post_id)
    {
        try {
            $prevPost = DB::table('blog')->where('id', $post_id)->first();

            $post['title']=$request->title;
            $post['slug']=$request->slug;
            $post['content']=$request->content;
            $post['summary']=$request->summary;
            $post['meta_description']=$request->meta_description;
            $post['meta_keywords']=$request->meta_keywords;
            $post['slug']=$request->slug;
			      $post['image_alt']=$request->image_alt;
            $post['image_title']=$request->image_title;
            $post['image_thumb_alt']=$request->image_thumb_alt;
            $post['image_thumb_title']=$request->image_thumb_title;

            $date = Carbon::now();
            $date->format('Y-m-d h:i:s');
            $post['updated_at'] = $date;

            $prev_image = $prevPost->image;
            $info = pathinfo($prev_image);
            $prev_image_name =  basename($prev_image,'.'.$info['extension']);
            $tmp = explode('.', $prev_image);
            $prev_image_ext = end($tmp);


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $file_extension = $request->image->getClientOriginalExtension();
                $filename = $post['slug'].'.'. $file_extension;
                $thumbname = pathinfo($filename, PATHINFO_FILENAME).'_thumb.'.$file_extension;

                $destinationPath = \Storage::disk('blog')->path('/');
                $thumbnailImage = Image::make($image->getRealPath());
                $thumbnailImage->resize(350,270)->save($destinationPath.'/'.$thumbname);
                $image->move($destinationPath.'/', $filename);
                $post['image'] = '/blog/uploads/'.$filename;

                $prev_image_path = $destinationPath.'/'.$prev_image_name.'.'.$prev_image_ext;
                $prev_image_thumb_path = $destinationPath.'/'.$prev_image_name.'_thumb.'.$prev_image_ext;
                if (File::exists( $prev_image_path)) {
                  unlink($prev_image_path);
                }
                if (File::exists( $prev_image_thumb_path)) {
                  unlink($prev_image_thumb_path);
                }
            }
            DB::table('blog')
              ->where('id', $post_id)
              ->update($post);

            return redirect()->back();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function edit($id)
    {
        $user=Auth::user();
        $post=DB::table('blog')->where('id',$id)->first();
        return view('blog.edit',compact('post','user'));

    }
    public function create()
    {
        $user=Auth::user();
        return view('blog.create',compact('user'));
    }
    public function delete($id){
        $result = DB::table('blog')
              ->where('id', $id)
              ->delete();
        return redirect()->back();
    }

}
