<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;

class PortfolioController extends Controller
{
    public function execute(){
	    if (view()->exists('admin.portfolio')) {
	    	$portfolios = Portfolio::all();
	    	$data = [
	    		'title'      => 'Portfolios',
	    		'portfolios' => $portfolios
	    	];
	    	return view('admin.portfolio',$data);
    	}
    	else{
    		abort(404);
    	}
    }
}
