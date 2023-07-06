<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class commentController extends Controller
{
    //
    public function index()
    {
        $p=comment::all();
     
       return view('comments.index',compact('p'));
    }
    public function create()
    {
        return view('comments.create');
    }
    public function insert(Request $request)
    {
        //
        //return $request;
        /* method 1
        $prod=new produit();
        $prod->name=$request->name;
        $prod->price=$request->price;
        $prod->save();
        */
        comment::create([
         'body'=>$request->body,
         

        ]);
       
        return 'insert';
    }
        
    public function destroy($id)
    {
       // return 'sstt';
        comment::findorfail($id)->delete();
        return redirect()->back();
    }
    public function destroy1($id)
    {
       // return 'sstt';
       // comment::findorfail($id)->delete();
       // return redirect()->back();
       comment::withTrashed()->where('id',$id)->forceDelete();
      // return 'aa5';
      return redirect()->back();
    }

    public function show(){
        $p=comment::onlyTrashed()->get();
        return view('comments.softdelete',compact('p'));
    }
      public function restore($id){
        comment::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
    public function display()
    {
     //  $p=comment::where('body','ccc')->first();
     $p=comment:: Comments()->first();
    
       return $p;
     //  return 'oop';
    }
}
