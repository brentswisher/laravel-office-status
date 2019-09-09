<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Users;

class UsersController extends Controller
{
    public function index() {
        $users = Users::all();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $user = new Users();
        $user->username = request('username');
        $user->firstName = request('firstName');
        $user->lastName = request('lastName');
        $user->save();
        return redirect('/users');
    }

    public function show($username) {
        $user = Users::where('username',$username)->firstOrFail();
        return $user;
    }

    public function edit($username) {
        $user = Users::where('username',$username)->firstOrFail();
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $username) {
        $user = Users::where('username',$username)->firstOrFail();
        $user->username = request('username');
        $user->firstName = request('firstName');
        $user->lastName = request('lastName');
        $user->save();
        return redirect('/users');
    }

    public function destroy($username) {
        $user = Users::where( 'username' , $username )->firstOrFail();
        $user->delete();
        return redirect( '/users' );
    }
}
