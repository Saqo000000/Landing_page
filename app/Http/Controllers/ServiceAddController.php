<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use Validator;
class ServiceAddController extends Controller
{
    public function execute(Request $request){

    	/*------------------add page---------------------*/
    	If($request->isMethod('post')){

    		$input = $request->except('_token');

    		$validator = Validator::make($input,[
    			'name' => 'required|max:255',
    			'text' => 'required',
    			'icon' => 'required'
    		]);

    		if ($validator->fails()) {
    			return redirect()->route('serviceAdd')->withErrors($validator)->withInput();
    		}

    		$service = new Service;
    		$service->name    = $input['name'];
    		$service->text  = $input['text'];
    		$service->icon  = $input['icon'];
			if($service->save()){
				return redirect()->route('serviceAdd')->with('status','Service created');
			}    

    	}	
    	/*------------------/add page*---------------------*/


  
    	/*------------------view page*---------------------*/
	    if(view()->exists('admin.service_add')){
	    	$data = [
    			'title' => 'New service'
    		];
	    	return view('admin.service_add',$data);
	    }
	    else{
	    	abort(404);
		}	  
    	/*------------------/view page*---------------------*/


	 }
}
