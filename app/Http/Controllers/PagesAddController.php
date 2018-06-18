<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Page;

class PagesAddController extends Controller
{
    //

    public function execute(Request $request){

    	If($request->isMethod('post')){
    		$input = $request->except('_token');
    		$validator = Validator::make($input,[
    			'name' => 'required|max:255',
    			'alias' => 'required|unique:pages|max:255',
    			'text' => 'required'
    		]);

    		if ($validator->fails()) {
    			return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
    		}

    		if($request->hasFile('images')){
    			$file = $request->file('images');

    			$input['images'] = $file->getClientOriginalName();
    			
    			$file->move(public_path().'\assets\img',$input['images']);
    			
    		}

    		$page = new Page;
    		$page->name   = $input['name'];
    		$page->alias  = $input['alias'];
    		$page->text   = $input['text'];
    		$page->images = $input['images'];
    		// dd($page->images);
    		$rezult = $page->save();
			if($rezult){
				return redirect('admin')->with('status','Page created');
			}    		
    	}

    	if(view()->exists('admin.pages_add')){
    		$data = [
    			'title' => 'New page'
    		];
    		return view('admin.pages_add',$data);
    	}

    	abort(404);
    }
}
// saqo dza
