<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioAddController extends Controller
{
	public function execute(){
    
	    if(view()->exists('admin.portfolio_add')){
	    		$data = [
	    			'title' => 'New portfolio'
	    		];
	    		return view('admin.portfolio_add',$data);
	    	}
	    	else{

	    	abort(404);
		}	  
	 }
}
