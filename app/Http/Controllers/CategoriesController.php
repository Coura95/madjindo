<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;
class CategoriesController extends Controller
{

    public function index()
    {
        $categories = \App\category::all();
        return view("categories.index",compact('categories'));
    }
    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        category::create(['name'=>$request->input('name')]);
        return redirect('/categories')->with(["success"=>"enregistrement avec success"]);

    }
    public function update(Request $request, $id){
        $category = category::find($id);
        if($category){
            $category->name = $request->input('name');

            $category->save();
        }
        return redirect('/categories');
     }

     public function edit($id)
{
   $categories = \App\category::find($id);//on recupere le produit
   return view('categories.edit', compact('categories'));
}
    public function destroy($id)
    {
        $category = \App\category::find($id);
        if($category)
            $category->delete();
        return redirect()->route('categories.index');
    }



}
