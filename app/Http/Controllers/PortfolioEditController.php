<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;
use Validator;
class PortfolioEditController extends Controller
{
   public function execute(/*$id*/Portfolio $portfolio,Request $request){  

        /*$portfolio = portfolio::find($id);*/
    	/*----------------delete page----------------*/
    	if ($request->isMethod('delete')) {

			$portfolio->delete();

			return redirect()->route('portfolio')->with('status','Portfolio deleted');
    	}
    	/*----------------delete page----------------*/



    	/*----------------edit page----------------*/
    	If($request->isMethod('post')){

    		$input = $request->except('_token');
			$res = Portfolio::where('filter',$input['filter'])->count();

			if($res == 0){
				return redirect()->route('portfolioEdit')->with('status','Select an filter from the list');
			}
    		$validator = Validator::make($input,[
    			'name'   => 'required|max:255',
    			'filter' => 'required'
    		]);

    		if ($validator->fails()) {
    			return redirect()->route('portfolio')->withErrors($validator)->withInput();
    		}

    		if($request->hasFile('images')){
    			$file = $request->file('images');
    			$file->move(public_path().'/assets/img',$file->getClientOriginalName());
    			$input['images'] = $file->getClientOriginalName();
    		}
    		else{
    			$input['images'] = $input['old_images'];
    		}
    		unset($input['old_images']);
    		$portfolio->fill($input);
    		
    		if($portfolio->update()){
    		
    			return redirect()->route('portfolio')->with('status','Portfolio updated');
    		
    		}

    	}
    	/*----------------/edit page----------------*/




    	/*------------------view page---------------------*/
    	$old = $portfolio->toArray();
    	if(view()->exists('admin.portfolio_edit')){
    		$filters = Portfolio::distinct()->pluck('filter');
    			foreach($filters as $key=>$value){
    				$arg[$value] = $value;
    			};
    		$data = [
    			'title'   => 'Editing  '.$old['name'].'  portfolio',
    			'data'    => $old,
    			'filters' => $arg
    		];
    		return view('admin.portfolio_edit',$data);
    	}
    	/*------------------/view page---------------------*/

   }
}
