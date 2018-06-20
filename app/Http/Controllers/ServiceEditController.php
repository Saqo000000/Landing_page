<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use Validator;

class ServiceEditController extends Controller
{
    public function execute(/*$id*/Service $service,Request $request){  

    	/*$service = Service::find($id);*/

    	/*----------------delete page----------------*/
    	if ($request->isMethod('delete')) {

			$service->delete();

			return redirect()->route('service')->with('status','Service deleted');
    	}
    	/*----------------delete page----------------*/



    	/*----------------edit page----------------*/
    	If($request->isMethod('post')){

    		$input = $request->except('_token');

    		$validator = Validator::make($input,[
    			'name'   => 'required|max:255',
    			'icon' => 'required',
    			'text' => 'required|min:10'
    		]);

    		if ($validator->fails()) {
    			return redirect()->back()->withErrors($validator)->withInput();
    		}

    		$service->fill($input);
    		
    		if($service->update()){
    		
    			return redirect()->route('service')->with('status','Service updated');
    		
    		}

    	}
    	/*----------------/edit page----------------*/




    	/*------------------view page---------------------*/
    	$old = $service->toArray();
    	if(view()->exists('admin.service_edit')){
    		$data = [
    			'title'   => 'Editing  '.$old['name'].'  portfolio',
    			'data'    => $old
    		];
    		return view('admin.service_edit',$data);
    	}
    	/*------------------/view page---------------------*/

   }
}
