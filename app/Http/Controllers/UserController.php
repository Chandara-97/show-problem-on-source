<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipPhd;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index(){
        $users = User::latest()->get();

        return view('admin.user.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);;;
    }
    public function viewprofile(){
        $admin =User::find(auth()->user()->id);

        return view('admin.profile',compact('admin'))->with('i', (request()->input('page', 1) - 1) * 5);;;
    }
    public function create(){
        return view('admin.user.create');
    }


    public function store(Request $request)
    {
        $Users = new User();
        $Users->name = $request->input('name');
        $Users->email = $request->input('email');
        $Users->password = $request->input->HASH('password');
        $Users->save();
//        'password' => Hash::make($data['password']

//        $product->name= $request->input('name');
//        $product->model= $request->input('model');
//        $product->slug= $request->input('slug');
        return redirect()->route('user.index')->with('success', 'Product created successfully.');
    }
    public function editrole($id){
        $users = User::find($id);
        //$usersinfo = User::all();
        return view('admin.user.update',compact('users'));
//        ,compact('users')
    }

    public function updaterole(Request $request,$id){
        $users = User::find($id);
        $users->role = $request->input('role');
        $users->save();
        return redirect('/admin/user/index');

    }
    public function update(){

    }
    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user.index');
    }

}
