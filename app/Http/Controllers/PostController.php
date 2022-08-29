<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Permission;
use Auth;

class PostController extends Controller
{
    //
  
    public function login($id) {
        $data = User::find($id);
        if (Auth::attempt(['email' => $data['email'], 'password' => '123123'])) {
            return 'Thanh cong';
        }
        return 'That bai';
    }

    public function view(){
        
        // $c = Auth::user()->can('update', Post::find(2));
        // dd($c);
        return view('post');
    }
    public function home() {
        $this->authorize('view-home');
        // dd(User::hasPermission(Permission::find(2))) ;
        return 'home';
    }
}
