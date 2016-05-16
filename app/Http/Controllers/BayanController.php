<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BayanController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('step_one.index');
	}


	public function getLogin(){
        return view('auth.login');
    }

	public function profile(){
		return view('profile.profile');
	}

}
