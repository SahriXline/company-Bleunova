<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Category;
use  App\Models\Message;
use  App\Models\Post;
use  App\Models\Page;
use  App\Models\Service;

// test
class SiteController extends Controller
{
  public function index(){
    //$slides=Slide::orderBy('created_at','desc')->take(3)->get();
    //$services=Service::take(3)->get();
    $posts=Post::orderBy('created_at','desc')->take(9)->get();
    $page=Page::where('slug','about')->first();
    $categories=Category::all();
   return view('site.accueil',[//'slides'=>$slides,
                              //'services'=>$services,
                              'posts'=>$posts,
                              'page'=>$page,
                              'categories'=>$categories]);
  }

  public function services($slug){
    $categories=Category::all();
    $category=Category::where('slug',$slug)->first();
    $service=$category->services()->paginate(6);
    dd($service);
    return view('site.services',['category'=>$category,
                                'categories'=>$categories]);      
  }

  // public function service($slug){
  //   //$service=Service::find($id);
  //   $categories=Category::all();
  //   return view('site.service',['categories'=>$categories]);      
  // }
  public function blog(){
    $categories=Category::all();
    $posts=Post::paginate(6);
     return view('site.blog',['posts'=>$posts,'categories'=>$categories,'categories'=>$categories]);      
  }

  public function about(){
    $page=Page::where('slug','about')->first();
    $categories=Category::all();
    return  view('site.about',['page'=>$page ,'categories'=>$categories]);     
  }

  public function contact(){
    $categories=Category::all();
     return view('site.contact' ,['categories'=>$categories]);    
  }
// Pour persister un nouveau message
  public function storeContact(Request $request){

   $data= $request->validate([
      'name'=>'required',
      'email'=>'required|email',
      'message'=>'required|min:5|max:300',

   ]);
    $message= new Message();
    $message->name= $data['name'];
    $message->email= $data['email'];
    $message->message= $data['message'];

    $message->save();

    return redirect('/contact')->with('status',"Salut $message->name , votre demande sera dans quelques instant.");    
 }
  
  
  public function show($slug){
    $post=Post::where('slug',$slug)->first();
    $categories=Category::all();
    return view('site.show',['post'=>$post,'categories'=>$categories]);    
 }

 public function getPostsOfCategory($slug){
   $category=Category::where('slug',$slug)->first();
   $posts=$category->posts()->paginate(6);
    //  dd($posts);
   $categories=Category::all();
  
    return view('site.blog',['posts'=>$posts,'categories'=>$categories]); 
 }
}
