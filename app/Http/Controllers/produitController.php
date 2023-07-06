<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;

class produitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $p=produit::all();
     //   return 'computer scinece';
  return view('produits.index',compact('p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produits.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request;
        /* method 1
        $prod=new produit();
        $prod->name=$request->name;
        $prod->price=$request->price;
        $prod->save();
        */
        produit::create([
         'name'=>$request->name,
         'price'=>$request->price  

        ]);
        return('تم الإضافة بنجاح ');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $p=produit::onlyTrashed()->get();
        return view('produits.softdelete',compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pl=produit::find($id);
       // return $pl;
   return view('produits.edit',compact('pl'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pll=produit::findorfail($id);
        $pll->name=$request->name;
        $pll->price=$request->price;
        $pll->save();
        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        produit::findorfail($id)->delete();
        return redirect()->back();
    }
}
