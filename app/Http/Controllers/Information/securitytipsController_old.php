<?php

namespace App\Http\Controllers\information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\securitytips;
use Illuminate\Support\Carbon;

class securitytipsController extends Controller
{
    public function securityPage(){
        return view('backend.information.securitytips_page');
    }//end method
    public function storeSecurity(Request $request)
    {
        securitytips::insert([
            'title' => $request->title,
            'body'=>$request->body,
            'created_at'=> carbon::now(),
        ]);
        $notification =array( 'message' => 'Your Message sumitted sucessfully',
    'alert-type' =>'success'
);
return redirect()->back()->with($notification);

    }//end method

   public function securityDelete($id) {
        $security = securitytips::find($id);
        $security->delete();
        $notification =array( 'message' => 'post deleted sucessfully',
        'alert-type' =>'success' );
        return redirect()->route('peace.view')->with($notification);  
    }// End of delete_security Method 
    

    public function securityDisplay(){
        $security= securitytips::latest()->get();
        return view('frontend.information.securitytips',compact('security'));
   }//end method  


   public function viewSecurity() {
    $security = securitytips::all(); 
    return view('backend.information.security_view', compact('security'));
} //end method FPRO.view



public function editsecurity($id){
    $security = securitytips::find($id);
    $security_id = $id;
    return view('backend.information.edit_security', compact('security','security_id'));
   } //end editPeace method



public function securityUpdate(Request $request, $id){
    
    $security= securitytips::find($id);
    $security->title = $request->input('title');
    $security->body = $request->input('body');
    $security->save();   
    $notification =array( 'message' => 'Your post updated sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('security_view')->with($notification);  
}// End of update security  Method



}
