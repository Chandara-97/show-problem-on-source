<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        $changes=User::find(auth()->user()->id);

        $changes->name = $request->input('name');
        $changes->email = $request->input('email');
        $changes->save();

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        //dd('Password change successfully.');
        return redirect()->back()->with('success','update successfully');
    }

    public function userindex()
    {
        return view('UserChangePassword');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userstore(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        $changes=User::find(auth()->user()->id);

        $changes->name = $request->input('name');
        $changes->email = $request->input('email');
        $changes->save();

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        //dd('Password change successfully.');
        return redirect()->back()->with('success','update successfully');
    }
}
