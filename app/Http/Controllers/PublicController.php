<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function welcome(){ 
        
        $articles = Article::where('is_accepted',true)->take(3)->orderBy('created_at','desc')->get();  
        
        return view('welcome' , compact('articles'));  
    
    }

    public function categoryshow(Category $category){

        $articles = Article::where('category_id',$category->id)->where('is_accepted', true)->paginate(6);

        return view('category-show',compact('category','articles'));
    }

    public function searchArticles(Request $request)
    {
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(6);
        return view('article.search', compact('articles','request'));
      
    }

    public function privacy()
    {
        return view('privacy');
      
    }

    public function terms()
    {
        return view('terms');
      
    }

    public function about()
    {
        return view('about');
      
    }

    public function setLanguage($lang){

        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function profile(){
        return view('user.profile');
    }


}
