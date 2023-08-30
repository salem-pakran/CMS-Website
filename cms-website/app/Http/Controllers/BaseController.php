<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    public function home()
    {
        $home = Page::where('page_title','home')->get();
        $post = Post::where('page_title','home')->get();
    	return view('home',['home'=>$home,'post'=>$post]);
    }


    public function services(){

        $services = Page::where('page_title','services')->get();
        $post = Post::where('page_title','services')->get();
    	return view('services',['services'=>$services,'post'=>$post]);
      // return admin::all();

    }


    public function company(){

        $our_company = Page::where('page_title','our_company')->get();
        $post = Post::where('page_title','our_company')->get();
    	return view('company',['our_company'=>$our_company,'post'=>$post]);

    }



    public function contact_us(){

        return view('contact');

    }


}
