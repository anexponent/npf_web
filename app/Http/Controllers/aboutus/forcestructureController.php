<?php

namespace App\Http\Controllers\aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\forcestructure;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;

class forcestructureController extends Controller
{
    public function forcePage (){

        return view('backend.aboutus.force_structure');

    }//end method

    public function storeForce(Request $request)
    {
        forcestructure::insert([
            'title' => $request->title,
            'body'=>$request->body,
            'created_at'=> carbon::now(),
        ]);
        $notification =array( 'message' => 'Your Message sumitted sucessfully',
    'alert-type' =>'success'
);
return redirect()->back()->with($notification);

    }//end method


    public function deleteForce($id) {
        $force = forcestructure::find($id);
        $force->delete();
        $notification =array( 'message' => ' Force Structure post deleted sucessfully',
        'alert-type' =>'success' );
        return redirect()->route('force.show')->with($notification);  
    }// End of delete force Structure Method 
    

    public function forceDisplay(){
        $force= forcestructure::latest()->get();
        return view('frontend.aboutus.force_structure',compact('force'));
   }//end method


   public function showForce()
{
    $force = forcestructure::latest()->get();
    return view('backend.aboutus.force_show',compact('force'));
}//end force_show method



public function editForce($id){
    $force = forcestructure::find($id);
   return view('backend.aboutus.edit_force',compact('force'));
}//end method



public function updateForce(Request $request, $id)
    {
        $force= forcestructure::find($id);
        $force->title = $request->input('title');
        $force->body = $request->input('body');
        $force->save();
        $notification =array( 'message' => 'Force structure  updated sucessfully',
    'alert-type' =>'success'
);
return redirect()->route('force.show')->with($notification);
}//end method 


}
