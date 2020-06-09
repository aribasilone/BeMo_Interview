<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
class PageController extends Controller
{
    //
    public function index(){
        // Get pages
        $pages = Page::all();
        // Return pages
        return $pages;
    }

    public function show($page_name){
        $page = Page::where('page_name',$page_name)->firstOrFail();

        return $page;
    }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param Request $request
         */
    public function store(Request $request){
        $page = $request->isMethod('put') ? Page::where('page_name',$request->page_name)->firstOrFail() : new Page;
       
        $page->page_name = $request->input('page_name');
        $page->indexable = $request->input('indexable');
        $page->image_name = $request->input('image_name');
        $page->meta_title = $request->input('meta_title');
        $page->meta_descr = $request->input('meta_descr');
        $page->fb_pixel = $request->input('fb_pixel');
        $page->google = $request->input('google');
        $page->contact_email = $request->input('contact_email');
    
        if ($page->save()) {
            return $page;
        }  
            return null;
    }
    
}
