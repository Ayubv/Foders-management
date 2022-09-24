<?php

namespace App\Http\Controllers;

use App\Models\Foder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FoderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    $showFoders=Foder::all()->where('user_id',Auth::user()->id);
    return view('foders.index',compact('showFoders'));
       
    }

    public function createFoder()
    {
       return view('foders.create');

       
    }

    public function storeFoder(Request $request)
    {
        $rules = [
            'fodMOnth'  => 'required',
            'ferName'   => 'required',
            'mob'       => 'required',
            'ghasName'  => 'required',
            'landAmo'   => 'required',
            'Production'=> 'required',
            'motFod'    => 'required',
            'motSel'    => 'required',
            'mark'      => 'nullable'
        
        ];
        $messages = [
            'fodMOnth.required'  => 'The month name is required.',
            'ferName.required'   => 'Fermers nae is required',
            'mob.required'    => 'Mobile number is required',
            'ghasName.required'         => 'Foders name is required',
            'landAmo.required'      => 'Land Amount is required',
            'Production.required'      => 'Production field is required',
            'motFod.required'      => 'Motive of food is required',
            'landAmo.required'      => 'Land Amount is required',
            'motSel.required'      => 'Motive of Sell is required',
            'mark'      => 'Motive of Sell is required'
        ];
        $request->validate($rules, $messages);
      
    $foders=new Foder();
    $foders->user_id=Auth::user()->id;
    $foders->fodMOnth=$request->fodMOnth;
    $foders->ferName=$request->ferName;
    $foders->mob= $request->mob;
    $foders->ghasName= $request->ghasName;
    $foders->landAmo= $request->landAmo;
    $foders->Production= $request->Production;
    $foders->motFod= $request->motFod;
    $foders->motSel= $request->motSel;
    $foders->mark= $request->mark;
   
    $foders->save();
    
    Session::flash('success','Data stored successfully');
            return redirect('/foders/index');

       
    }


    public function editFoder($id=null)
    {
        $editFoders=Foder::find($id);
       return view('foders.edit',compact('editFoders'));
    }

        public function updateFoder(Request $request,$id)
        {

            $rules = [
                'fodMOnth'  => 'required',
                'ferName'   => 'required',
                'mob'       => 'required',
                'ghasName'  => 'required',
                'landAmo'   => 'required',
                'Production'=> 'required',
                'motFod'    => 'required',
                'motSel'    => 'required',
                'mark'      => 'nullable'
            
            ];
            $messages = [
                'fodMOnth.required'  => 'The month name is required.',
                'ferName.required'   => 'Fermers nae is required',
                'mob.required'    => 'Mobile number is required',
                'ghasName.required'         => 'Foders name is required',
                'landAmo.required'      => 'Land Amount is required',
                'Production.required'      => 'Production field is required',
                'motFod.required'      => 'Motive of food is required',
                'landAmo.required'      => 'Land Amount is required',
                'motSel.required'      => 'Motive of Sell is required',
                'mark'      => 'Motive of Sell is required'
            ];
            $request->validate($rules, $messages);
          
        $foders= Foder::find($id);
        $foders->user_id=Auth::user()->id;
        $foders->fodMOnth=$request->fodMOnth;
        $foders->ferName=$request->ferName;
        $foders->mob= $request->mob;
        $foders->ghasName= $request->ghasName;
        $foders->landAmo= $request->landAmo;
        $foders->Production= $request->Production;
        $foders->motFod= $request->motFod;
        $foders->motSel= $request->motSel;
        $foders->mark= $request->mark;
       
        $foders->save();
        
        Session::flash('success','Data Updated successfully');
                return redirect('/foders/index');
    
            
        
        }

    //delete
    public function deleteFoder($id=null)
    {
        $deleteFoders=Foder::find($id); 
        $deleteFoders->delete();
        Session::flash('success','Data Deleted successfully');
        return redirect('/foders/index');
    }



}
