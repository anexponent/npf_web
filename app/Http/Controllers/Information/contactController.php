<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\contact;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon; 

class contactController extends Controller
{
    
    public function contactPage (){
        return view('backend.information.contact_us');
    }//end method

    public function storeMessage (Request $request){
        contact::insert([
            'rank' => $request->rank,
            'name' => $request->name,
            'designation' => $request->designation,
            'phone_number' => $request->phone_number,
            'created_at' => Carbon::now(),
        ]);
        $notification =array( 'message' => 'Your contact sumitted sucessfully',
        'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }//end method


    public function contactDisplay(){
        $contact= contact::all();
        return view('frontend.information.contact_us',compact('contact'));
   }//end method


   public function viewContact() {
    $contact = contact::all(); 
    return view('backend.information.contact_view', compact('contact'));
} //end method Contact.view 


   public function editContact($id){
    $contact = contact::find($id);
    $contact_id = $id;
    return view('backend.information.contact_edit', compact('contact','contact_id'));
}// End of Edit Contact Method


public function contactDelete($id) {
    $contact = contact::find($id);
    $contact->delete();
    $notification =array( 'message' => 'contact deleted sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('contact.view')->with($notification);  
}// End of delete_product Method 



public function contactUpdate(Request $request, $id){
    
    $contact= contact::find($id);
    $contact->rank = $request->input('rank');
    $contact->name = $request->input('name');
    $contact->designation = $request->input('designation');
    $contact->phone_number = $request->input('phone_number');
    $contact->save();   
    $notification =array( 'message' => 'Your conatct updated sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('contact.view')->with($notification);  
}// End of update Conatct  Method


}
