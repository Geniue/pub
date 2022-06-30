<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Pages;
use DB; 
use Image;
class PagesController extends Controller
{
    public function index()
    {
        
        $user=Auth::user();
        if(Auth::user()->is_admin==1){
            //$post=Post::with('getPostDetails')->get();
            $pages = Pages::getPagesDetails();
        }
       
        /*else{
            $tickets=Ticket::with('ticketdetail','attachments')->where('user_id',Auth::id())->get();
        } */
       return view('pages.index',compact('pages','user'));
    }
	
	 public function store(Request $request)
    {   
		 
	    try {
            $data['page_name']=$request->page_name;
            $data['site_name']=$request->site_name;
            $data['site_title']=$request->site_title;
            $data['site_description']=$request->site_description;
            $data['site_keywords']=$request->site_keywords;

            $data['canonical']=$request->canonical;
            $data['og_site_title']=$request->og_site_title;
            $data['og_description']=$request->og_description;
            $data['og_title']=$request->og_title;

            $data['og_url']=$request->og_url;
            $data['tw_title']=$request->tw_title;
            $data['tw_url']=$request->tw_url;

            $data['tw_description']=$request->tw_description;
           
            if($request->hasFile('og_image')) {
                $og_image       = $request->file('og_image');
                $file_extension = $request->og_image->getClientOriginalExtension();
                $og_filename = Str::random(50).'og.'. $file_extension;
                \Storage::disk('attachments')->put($og_filename, \File::get($request->og_image));
                $data['og_image'] = $og_filename;
            } 
            if($request->hasFile('tw_image')) {
                $tw_image       = $request->file('tw_image');
                $file_extension = $request->tw_image->getClientOriginalExtension();
                $tw_filename = Str::random(50).'tw.'. $file_extension;
                \Storage::disk('attachments')->put($tw_filename, \File::get($request->tw_image));
                $data['tw_image'] = $tw_filename;
            }
			
			DB::table('pages')->insert($data);
            //$post->save();
            
            return redirect()->back();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
	
	 public function create()
    {
        $user=Auth::user();
        return view('pages.create',compact('user'));
    }
	
    public function update(Request $request,$data_id)
    {
        try {
            $data['page_name']=$request->page_name;
            $data['site_name']=$request->site_name;
            $data['site_title']=$request->site_title;
            $data['site_description']=$request->site_description;
            $data['site_keywords']=$request->site_keywords;

            $data['canonical']=$request->canonical;
            $data['og_site_title']=$request->og_site_title;
            $data['og_description']=$request->og_description;
            $data['og_title']=$request->og_title;

            $data['og_url']=$request->og_url;
            $data['tw_title']=$request->tw_title;
            $data['tw_url']=$request->tw_url;

            $data['tw_description']=$request->tw_description;
           
            if($request->hasFile('og_image')) {
                $og_image       = $request->file('og_image');
                $file_extension = $request->og_image->getClientOriginalExtension();
                $og_filename = Str::random(50).'og.'. $file_extension;
                \Storage::disk('attachments')->put($og_filename, \File::get($request->og_image));
                $data['og_image'] = $og_filename;
            } 
            if($request->hasFile('tw_image')) {
                $tw_image       = $request->file('tw_image');
                $file_extension = $request->tw_image->getClientOriginalExtension();
                $tw_filename = Str::random(50).'tw.'. $file_extension;
                \Storage::disk('attachments')->put($tw_filename, \File::get($request->tw_image));
                $data['tw_image'] = $tw_filename;
            } 
            
            DB::table('pages')
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
        $page=DB::table('pages')->where('id',$id)->first();
        return view('pages.edit',compact('page','user'));
      
    }
    public function delete($id){
        $result = DB::table('pages')
              ->where('id', $id)
              ->delete();
        return redirect()->back();
    }
}
