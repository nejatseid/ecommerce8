<?php

namespace App\Http\Controllers;
use App\Models\catagory;
use Illuminate\Http\Request;
class catagoryController extends Controller
{
    public function register()
    {
    return view('catagory.register');
    }
      function store(Request $request)
      
      {
        $catagory =new catagory();
        $catagory->id = $request->id;
        $catagory->name = $request->name;
       $is_saved = $catagory->save();
      if($is_saved){
      echo " Record saved successfully.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
      }
      public function get_all()
      {
       $catagory = catagory::all();
       return view('catagory.list', compact('catagory'));
      } 
      public function edit($id)
   {
   $catagory = catagory::find($id);
   return view('catagory.edit', compact('catagory'));
   }
   public function update(Request $request)
   {
    $request->validate([
      'name' => 'required'
      ]);
      $catagory= catagory::find($request->id);
      $catagory->name = $request->name;
   ;
      $catagory->save();
      return redirect('catagory/list');
      }
      public function delete($id)
   {
   catagory::where('id', $id)->delete();
   return redirect('catagory/list');
     
  }
  public function search($id)
      {
       $catagory = catagory::where('id',$id)->first();
       return view('catagory.search', compact('catagory'));
      }
}