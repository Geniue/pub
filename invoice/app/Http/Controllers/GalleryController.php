<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Gallery;
use DB;
use Image;
//use Intervention\Image\ImageManagerStatic as Image;
class GalleryController extends Controller
{
    //


    public function index()
    {
        $user=Auth::user();
        if(Auth::user()->is_admin==1){
            //$post=Post::with('getPostDetails')->get();
            $gallery = Gallery::getGalleryDetails();
        }
        /*else{
            $tickets=Ticket::with('ticketdetail','attachments')->where('user_id',Auth::id())->get();
        } */
       return view('gallery.index',compact('gallery','user'));
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

            $data=new Gallery();
            $image_title = $request->image_title;
            $data['image_title']=$image_title;
            $data['image_alt']=$request->image_alt;
            $data['thumb_title']=$request->thumb_title;
            $data['thumb_alt']=$request->thumb_alt;

            if($request->hasFile('image')) {
                $image       = $request->file('image');
                $file_extension = $request->image->getClientOriginalExtension();
                $filename = $request->image->getClientOriginalName();
                $thumbname = pathinfo($filename, PATHINFO_FILENAME).'_thumb.'.$file_extension;
                \Storage::disk('assets')->put($filename, \File::get($request->image));
//                $thumb_image = $data->get_resize_image('/assets/images/gallery/'.$filename,256,256);
                \Storage::disk('assets')->put($thumbname, \File::get($request->image));

                $data['thumb_image'] = $thumbname;
                $data['image'] = $filename;
                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');
            }
            $data->save();

            return redirect()->back();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function update(Request $request,$data_id)
    {
        try {

            $data['image_title']=$request->image_title;
            $data['image_alt']=$request->image_alt;
            $data['thumb_title']=$request->thumb_title;
            $data['thumb_alt']=$request->thumb_alt;

            if($request->hasFile('image')) {
                $image       = $request->file('image');
                $file_extension = $request->image->getClientOriginalExtension();
                $filename = $request->image->getClientOriginalName();
                $thumbname = pathinfo($filename, PATHINFO_FILENAME).'_thumb.'.$file_extension;
                \Storage::disk('assets')->put($filename, \File::get($request->image));
//                $thumb_image = $data->get_resize_image('/assets/images/gallery/'.$filename,256,256);
                \Storage::disk('assets')->put($thumbname, \File::get($request->image));
                $data['thumb_image'] = $thumbname;
                $data['image'] = $filename;
                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');
            }

            /*
            if ($request->hasFile('image')) {
                $file_extension = $request->image->getClientOriginalExtension();
                $filename = Str::random(50).'.'. $file_extension;
                \Storage::disk('attachments')->put($filename, \File::get($request->image));
                $data['image'] = $filename;
            } */
            DB::table('gallery')
              ->where('id', $data_id)
              ->update($data);

            return redirect()->back();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function edit($id)
    {
        $user=Auth::user();
        $gallery=DB::table('gallery')->where('id',$id)->first();
        return view('gallery.edit',compact('gallery','user'));

    }
    public function create()
    {
        $user=Auth::user();
        return view('gallery.create',compact('user'));
    }

    public function delete($id){
        $result = DB::table('gallery')
              ->where('id', $id)
              ->delete();
        return redirect()->back();
    }

}
