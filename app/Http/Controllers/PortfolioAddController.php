<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;
use Validator;

class PortfolioAddController extends Controller
{
	public function execute(Request $request){



    	If($request->isMethod('post')){

    		$input = $request->except('_token');
			$res = Portfolio::where('filter',$input['filter'])->count();

			if($res == 0){
				return redirect()->route('portfolioAdd')->with('status','Select an filter from the list');
			}
    		$validator = Validator::make($input,[
    			'name' => 'required|max:255',
    			'filter' => 'required'
    		]);

    		if ($validator->fails()) {
    			return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
    		}

    		if($request->hasFile('images')){
    			$file = $request->file('images');

    			$input['images'] = $file->getClientOriginalName();
    			
    			$file->move(public_path().'\assets\img',$input['images']);
    			
    		}

    		$portfolio = new Portfolio;
    		$portfolio->name    = $input['name'];
    		$portfolio->filter  = $input['filter'];
    		$portfolio->images  = $input['images'];
			if($portfolio->save()){
				return redirect('admin')->with('status','Portfolio created');
			}    

    	}	


  
    	
	    if(view()->exists('admin.portfolio_add')){
	    	$filters = Portfolio::distinct()->pluck('filter');
	    		foreach($filters as $key=>$value){
	    			$arg[$value] = $value;
	    		};
	    		$data = [
	    			'title'   => 'New portfolio',
	    			'filters' => $arg
	    		];
	    		return view('admin.portfolio_add',$data);
	    	}
	    	else{
	    	abort(404);
		}	  


	 }
}
