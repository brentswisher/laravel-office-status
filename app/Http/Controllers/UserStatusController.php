<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Users;

class UserStatusController extends Controller
{
	public function index() {
		return view('dashboard', [
			'users' => Users::with('status')->get(),
			'statuses' => \App\Status::all()
		]);
	}

	public function show($username) {
		$user = Users::where('username',$username)->with('status')->firstOrFail();
		return $user;
	}

	public function update(Request $request, $username) {
		$user = Users::where('username',$username)->firstOrFail();        
		$status = \App\Status::where('publicId',request('statusId'))->first();
		$user->statusId = $status ? $status->statusId : null;
		$user->isAvailable = request('isAvailable');
		$user->note = request('note');
		$user->save();
		return $user;
	}
}
