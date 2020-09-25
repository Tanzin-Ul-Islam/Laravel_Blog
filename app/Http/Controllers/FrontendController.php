<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontendController extends Controller
{

    public function home(){
        $posts= Post::orderBy('created_at', 'ASC')->take(5)->get();
        $firstpost2=$posts->splice(0, 2);
        $middlepost=$posts->splice(0, 1);
        $lastpost2=$posts->splice(0, 2);

        $randompost = Post::inRandomOrder()->limit(4)->get();
        $endpost1=$randompost->splice(0, 1);
        $endpost2=$randompost->splice(0, 1); 
        $endposttop=$randompost->splice(0, 1);
        $endpostright=$randompost->splice(0, 1);
        

        $recentposts= Post::with('category')->orderBy('created_at', 'DESC')->paginate(9);

        return view('home', compact(['posts', 'recentposts', 'firstpost2', 'middlepost', 'lastpost2', 'endpost1', 'endpost2', 'endposttop', 'endpostright']));
    }


    public function about(){
        return view('website.about');
    }


    public function category(){
        return view('website.category');
    }

    public function contact(){
        return view('website.contact');
    }


    public function allpost($slug){
        $posts=Post::where('slug', $slug)->first();
        if($posts){
            return view('website.post', compact(['posts']));
        }
        else{
            return redirect('/');
        }
    }
}
