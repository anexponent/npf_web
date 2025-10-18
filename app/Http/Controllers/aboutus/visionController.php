<?php

namespace App\Http\Controllers\aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vision;
use App\Models\user;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;

class visionController extends Controller
{
    public function visionpage(){
        return view('backend.aboutus.vision_page');
    }//end method

    public function storeVsion(Request $request)
{
    vision::insert([
        'title' => $request->title,
        'message'=>$request->message,
        'created_at'=> carbon::now(),
    ]);

    $notification =array( 'message' => 'Your Message sumitted sucessfully',
    'alert-type' =>'success'
);
return redirect()->back()->with($notification);

}//end method

public function visionDisplay(){
     $vision = vision::latest()->get();
     return view('frontend.aboutus.vision',compact('vision'));

}//end method


public function editPage()
{
    $vision = vision::latest()->get();
    return view('backend.aboutus.edit_index',compact('vision'));
}//end method



public function editVision($id){
    $vision = vision::find($id);
   return view('backend.aboutus.edit_vision',compact('vision'));
}//end method



public function updateVision(Request $request, $id)
    {
        $vision = vision::find($id);
        $vision->title = $request->input('title');
        $vision->message = $request->input('message');
        $vision->save();
        $notification =array( 'message' => 'Your Message updated sucessfully',
    'alert-type' =>'success'
);
return redirect()->route('edit.index')->with($notification);
}//end method

public function showNow (){
    
    return view('backend.aboutus.shownow');
}//end method

    
    





}
