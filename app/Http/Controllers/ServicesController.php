<?php

namespace App\Http\Controllers;
use  App\Models\Category;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function pageTravaux(){
       $categories=Category::all();    
        return view('site.les-travaux-divers',['categories'=>$categories]);
    }

    public function pageTravaux1(){
        $categories=Category::all();    
         return view('site.les-travaux-divers1',['categories'=>$categories]);
     }

     public function pageTravaux2(){
        $categories=Category::all();    
         return view('site.les-travaux-divers2',['categories'=>$categories]);
     } 

     public function pageTravaux3(){
        $categories=Category::all();    
         return view('site.les-travaux-divers3',['categories'=>$categories]);
     }

    public function pageExport(){
       $categories=Category::all();
        return view('site.export-import',['categories'=>$categories]);
    }
    public function pageExport1(){
        $categories=Category::all();
         return view('site.export-import1',['categories'=>$categories]);
     }

     public function pageExport2(){
        $categories=Category::all();
         return view('site.export-import2',['categories'=>$categories]);
     }

     public function pageExport3(){
        $categories=Category::all();
         return view('site.export-import3',['categories'=>$categories]);
     }
    public function pageIt(){
      $categories=Category::all();
        return view('site.it-solution',['categories'=>$categories]);
    }

    public function pageIt1(){
        $categories=Category::all();
          return view('site.it-solution1',['categories'=>$categories]);
      }

      public function pageIt2(){
        $categories=Category::all();
          return view('site.it-solution2',['categories'=>$categories]);
      }
      public function pageIt3(){
        $categories=Category::all();
          return view('site.it-solution3',['categories'=>$categories]);
      }


}
