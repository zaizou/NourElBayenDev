<?php namespace App\Http\Controllers;

use App\AcademyAccount;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BayanRegistrationController extends Controller {

	public function registerUser(Request $request)
	{
		//$account=
		//return	new AcademyAccount(validator($request->all()));
		return 404;


	}


	public function validator(array $data)
	{
		return Validator::make($data, [
			'issm' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}


}
