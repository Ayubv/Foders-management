<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CowController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }


    public function index()
    {
      $showcows = Cow::where('user_id',Auth::user()->id)->latest()->paginate(5);
       return view('cows.index',compact('showcows'));
    }

    public function createCow()
    {
       return view('cows.create');
    }

    public function storeCow(Request $request)
    {
      $rules = [
        
         'serial_coedeve'    => 'required',
         'cowTarik'          => 'required',
         'farmers_name'      => 'required',
         'fat_name'          => 'required',
         'vill'              => 'required',
         'mobile'            => 'required',
         'gat'               => 'required',
         'old_cow'           => 'required',
         'color_ofbody'      => 'required',
         'num_culf'          => 'required',
         'amount_milk'       => 'required',
         'period_milk'       => 'required',
         'total_milk'        => 'required',
         'remark'            => 'nullable'
     
     ];
     $messages = [
      'serial_coedeve.required'   => 'Serial  is required',
         'cowTarik.required'  => 'The date field is required.',
         'farmers_name.required'    => 'Farmers name is required',
         'fat_name.required'         => 'Fathers name is required',
         'vill.required'      => 'Address is required',
         'mobile.required'      => 'Phone field is required',
         'gat.required'      => 'Must be  required',
         'old_cow.required'      => 'Must be  required',
         'color_ofbody.required'      => 'Must be  required',
         'num_culf.required'      => 'Must be  required',
         'amount_milk.required'      => 'Must be  required',
         'period_milk.required'      => 'Must be  required',
         'total_milk.required'      => 'Must be  required',
         'remark' =>'nullable'
        
        
     ];
     $request->validate($rules, $messages);
   
 $cows= new Cow();
 $cows->user_id=Auth::user()->id;
 $cows->serial_coedeve=$request->serial_coedeve;
 $cows->cowTarik=$request->cowTarik;
 $cows->farmers_name= $request->farmers_name;
 $cows->fat_name= $request->fat_name;
 $cows->vill= $request->vill;
 $cows->mobile= $request->mobile;
 $cows->gat= $request->gat;
 $cows->old_cow= $request->old_cow;
 $cows->color_ofbody= $request->color_ofbody;
 $cows->num_culf= $request->num_culf;
 $cows->amount_milk= $request->amount_milk;
 $cows->period_milk= $request->period_milk;
 $cows->total_milk= $request->total_milk;
 $cows->remark= $request->remark;

 $cows->save();
 
 Session::flash('success','Data stored successfully');
         return redirect('/cows/index');






    }

    public function editCow($id)
    {

      $editcow = Cow::find($id);
       return view('cows.edit',compact('editcow'));
    }
    public function updateCow(Request $request,$id)
    {

      $rules = [
        
         'serial_coedeve'    => 'required',
         'cowTarik'          => 'required',
         'farmers_name'      => 'required',
         'fat_name'          => 'required',
         'vill'              => 'required',
         'mobile'            => 'required',
         'gat'               => 'required',
         'old_cow'           => 'required',
         'color_ofbody'      => 'required',
         'num_culf'          => 'required',
         'amount_milk'       => 'required',
         'period_milk'       => 'required',
         'total_milk'        => 'required',
         'remark'            => 'nullable'
     
     ];
     $messages = [
      'serial_coedeve.required'   => 'Serial  is required',
         'cowTarik.required'  => 'The date field is required.',
         'farmers_name.required'    => 'Farmers name is required',
         'fat_name.required'         => 'Fathers name is required',
         'vill.required'      => 'Address is required',
         'mobile.required'      => 'Phone field is required',
         'gat.required'      => 'Must be  required',
         'old_cow.required'      => 'Must be  required',
         'color_ofbody.required'      => 'Must be  required',
         'num_culf.required'      => 'Must be  required',
         'amount_milk.required'      => 'Must be  required',
         'period_milk.required'      => 'Must be  required',
         'total_milk.required'      => 'Must be  required',
         'remark' =>'nullable'
        
        
     ];
     $request->validate($rules, $messages);
   
 $cows= Cow::find($id);
 $cows->user_id=Auth::user()->id;
 $cows->serial_coedeve=$request->serial_coedeve;
 $cows->cowTarik=$request->cowTarik;
 $cows->farmers_name= $request->farmers_name;
 $cows->fat_name= $request->fat_name;
 $cows->vill= $request->vill;
 $cows->mobile= $request->mobile;
 $cows->gat= $request->gat;
 $cows->old_cow= $request->old_cow;
 $cows->color_ofbody= $request->color_ofbody;
 $cows->num_culf= $request->num_culf;
 $cows->amount_milk= $request->amount_milk;
 $cows->period_milk= $request->period_milk;
 $cows->total_milk= $request->total_milk;
 $cows->remark= $request->remark;

 $cows->save();
 
 Session::flash('success','Data update successfully');
         return redirect('/cows/index');
  
    }



    public function deleteCow($id=null)
    {
     
      $deletecow = Cow::find($id); 
     
      $deletecow->delete();
      Session::flash('success','Data Deleted successfully');
      return redirect('/cows/index');
    }







}
