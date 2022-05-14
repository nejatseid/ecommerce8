<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function register()
    {
    return view('product.register');
    }
      function store(Request $request)
      
      {
        $product =new product();
        $product->id = $request->id;
        $product->name = $request->name;
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
       $is_saved = $product->save();
      if($is_saved){
      echo " Record saved successfully.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
      }
      public function get_all()
      {
       $product = product::all();
       return view('product.list', compact('product'));
      } 
      public function edit($id)
   {
   $product = product::find($id);
   return view('product.edit', compact('product'));
   }
   public function update(Request $request)
   {
    $request->validate([
      'name' => 'required'
      ]);
      $product= product::find($request->id);
      $product->name = $request->name;
      $product->unit = $request->unit;
      $product->price = $request->price;
      $product->quantity = $request->quantity;
      $product->save();
      return redirect('product/list');
      }
      public function delete($id)
   {
   product::where('id', $id)->delete();
   return redirect('product/list');
     
  }
  public function search($id)
      {
       $product = product::where('id',$id)->first();
       return view('product.search', compact('product'));
      }
}