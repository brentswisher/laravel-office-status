<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Status;

class StatusController extends Controller
{
    //
    public function index() {
		return view('status.index', [
			'statuses' => Status::all()
		]);
	}

	public function create() {
		return view('status.create');
	}

	public function edit( $publicId ) {
		$status = Status::where('publicId',$publicId)->firstOrFail();
		return view('status.edit',compact('status'));
	}

	public function update( $publicId ){
		$status = Status::where('publicId',$publicId)->firstOrFail();
		$status->title = request('title');
		$status->save();
		return redirect('/status');
	}

	public function store() {
		$status = new Status();
		$status->title = request('title');
		$status->save();
		return redirect('/status');
	}

	public function destroy( $publicId ){
		$status = Status::where( 'publicId' , $publicId )->firstOrFail();
		$status->delete();
		return redirect( '/status' );
	}
}
