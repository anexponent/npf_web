<?php

namespace App\Http\Controllers\aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\igpsec;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;

class igpsecController extends Controller
{
    public function igpsecPage (){

        return view('backend.aboutus.igpsec_page');

    }//end method
    public function igpsecMessage (Request $request)
    {
        igpsec::insert([
            'title' => $request->title,
            'body'=>$request->body,
            'created_at'=> carbon::now(),
        ]);
        $notification =array( 'message' => 'Your Message sumitted sucessfully',
    'alert-type' =>'success'
);
return redirect()->back()->with($notification);

    }//end method

    public function igpsecDisplay(){
        $igpsec = igpsec::latest()->get();
        return view('frontend.aboutus.igpsec',compact('igpsec'));
   
   }//end method  

   public function secPage()
   {
       $igpsec = igpsec::latest()->get();
       return view('backend.aboutus.igp_view',compact('igpsec'));
   }//end method
   



public function editIGP($id){
    $igpsec = igpsec::find($id);
      //dd($igpsec);
   return view('backend.aboutus.edit_igp',compact('igpsec'));
}//end method  edit.igpsec



public function igpsecDelete($id) {
    $igpsec = igpsec::find($id);
    $igpsec->delete();
    $notification =array( 'message' => ' IGPSEC post deleted sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('igpsec.index')->with($notification);  
}// End of delete IGPsecc Method 



public function updateIgpsec(Request $request, $id)
    {
        $igpsec = igpsec::find($id);
        $igpsec->title = $request->input('title');
        $igpsec->body = $request->input('body');
        $igpsec->save();
        $notification =array( 'message' => 'IGPSEC post updated sucessfully',
    'alert-type' =>'success'
);
return redirect()->route('igpsec.index')->with($notification);
}//end method 



}
