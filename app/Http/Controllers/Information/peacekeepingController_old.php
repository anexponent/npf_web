<?php

namespace App\Http\Controllers\information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\peacekeeping;
use Illuminate\Support\Carbon;


class peacekeepingController extends Controller
{
    public function peacePage(){
        return view('backend.information.peacekeeping_operations');
    }//end method
    public function storePeace(Request $request)
    {
        peacekeeping::insert([
            'title' => $request->title,
            'body'=>$request->body,
            'created_at'=> carbon::now(),
        ]);
        $notification =array( 'message' => 'Your Message sumitted sucessfully',
    'alert-type' =>'success'
);
return redirect()->back()->with($notification);

    }//end method

public function peaceDisplay(){
        $peace= peacekeeping::latest()->get();
        return view('frontend.information.peacekeeping_operations',compact('peace'));
   
   }//end method



   
public function peaceDelete($id) {
    $peace = peacekeeping::find($id);
    $peace->delete();
    $notification =array( 'message' => 'contact deleted sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('peace.view')->with($notification);  
}// End of delete_product Method 


    public function viewPeace(){
     $peace =peacekeeping::find(all);
     return view('backend.information.peace_view', compact('peace'));
    }//end Peace view Method


   public function editPeace($id){
    $peace = peacekeeping::find($id);
    $peace_id = $id;
    return view('backend.information.peace_edit', compact('peace','peace_id'));
   } //end editPeace method


   public function peaceUpdate(Request $request, $id){
    $contact= peacekeeping::find($id);
    $peace->title = $request->input('title');
    $peace->body = $request->input('body');
    $peace->save();   
    $notification =array( 'message' => 'post updated sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('peace.view')->with($notification);  
}// End of update Conatct  Method




}