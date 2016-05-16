<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
		$name='MEDJDOUB <span style="color:red">Bouzid' ;
		return view('pages.about')->with([
			'first'=>'MEDjDOUB',
			'last'=>'Bouzid'

			]);
	}
    
    
    
    public function contact(){
		$name='MEDJDOUB <span style="color:red">Bouzid' ;
        $peoples=[
            'MEDjDOUB',
			'Bouzid',
            'Assia',
            'A private'
        ];
        //$peoples=[];

        
        
		return view('pages.contact',compact('peoples'));
    
    
}

    public function retour(){
        echo "hello again";
    }
}   