<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class UserController extends Controller
{
    public function index(){
        $users=User::where('is_admin',3)->get();
        $user=Auth::user();
        return view('users.index',compact('users','user'));
    }
    public function profile(){
        $user=Auth::user();
         $gas_price=User::where('id',Auth::id())->first();
        return view('profile',compact('user','gas_price'));
    }
    public function profileUpdate(Request $request){
        $user=User::where('id',Auth::id())->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
         $user->gas_price=$request->gas_price;
        if($request->has('password')){
            $user->password = Hash::make($request->password);
        }
        $user->save();
          $gas_price=User::where('id',Auth::id())->first();
        return view('profile',compact('user','gas_price'));
    }
    public function create(){
        $user=Auth::user();
        if($user->is_admin==1) {
            return view('users.create',compact('user'));
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Add New Employee','status'=>'info']);
        }
    }
    public function edit(User $user){

        if(Auth::user()->is_admin==1) {
            $gas_price=User::where('id',Auth::id())->first();
            return view('users.edit',compact('user','gas_price'));
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Add New Employee','status'=>'info']);
        }
    }
    public function store(Request $request){

           $user = new User();
           $user->name=$request->employee_name;
           $user->email=$request->email;
           $user->phone= $request->phone;
           $user->is_approved= $request->is_approved;
           $user->is_admin= $request->is_admin;
           $user->password= Hash::make($request->password);
            if($request->has('mpg_of_car')){
            $user->mpg= $request->mpg_of_car;
            }
           $user->save();
        event(new Registered($user));
        $users=User::where('is_admin',3)->get();
        return view('users.index', compact('users'));

    }
    public function update(Request $request,User $user){
        $user->name=$request->employee_name;
        $user->email=$request->email;
        $user->phone= $request->phone;
        $user->is_approved= $request->is_approved;
        $user->is_admin= $request->is_admin;
        $user->gas_price= $request->gas_price;
        if($request->has('mpg')){
        $user->mpg= $request->employee_mpg;
        }
        if($request->has('password')){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        event(new Registered($user));
        $users=User::where('is_admin',3)->get();
        return view('users.index', compact('users'))->with(['message'=>'Employee Updated Successfully','status'=>'info']);;

    }
}
