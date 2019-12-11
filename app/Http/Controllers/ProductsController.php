<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\product;

class ProductsController extends Controller
{


   public function show($slug)
   {
       return view( 'product.show' ,compact("slug"));
   }


    public function create()
    {
        $categories = \App\category::pluck('name','id');
        return view('products.create', compact('categories'));
        return redirect()->route('products')->with(['success' => "Produit enregistré"]);
    }


    public function edit($id)
    {
        $product = \App\product::find($id);
        $categories = \App\category::pluck('name','id');
        return view('products.edit', compact('product','categories'));
    }


    public function update(Request $request, $id)
    {
        $product = \App\product::find($id);
        if($product){
            $product->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'category_id' => $request->input('category_id'),
            ]);
        }
        return redirect()->back();
    }

    public function index(){
        $products = product::orderBy('created_at')->get();
        return view('products.index', compact('products'));
    }
    public function store(Request $request)
    {
        $produit = new Product();
        $produit->name = $request->input('name');
        $produit->prix = $request->input('prix');
        $produit->category_id = $request->input('category_id');
        $produit->quantite = $request->input('quantite');
        $produit->description = $request->input('description');
        $produit->save();
        return redirect('/products');

    }
    public function destroy($id)
    {
        $category = \App\product::find($id);
        if($category)
            $category->delete();
        return redirect()->route('products.index');
    }




}
