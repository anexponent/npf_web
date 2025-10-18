<?php

namespace App\Http\Controllers\aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\history;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;

class historyController extends Controller
{
    public function historyPage (){
        return view('backend.aboutus.history_index');
    }//end method

    public function storeHistory(Request $request)
    {
        history::insert([
            'title' => $request->title,
            'body'=>$request->body,
            'created_at'=> carbon::now(),
        ]);
        $notification =array( 'message' => 'Your Message sumitted sucessfully',
    'alert-type' =>'success'
);
return redirect()->back()->with($notification);

    }//end method


    public function historyDisplay(){
        $history= history::latest()->get();
        return view('frontend.aboutus.history_npf',compact('history'));
   
   }//end method


   public function showHistory()
{
    $history = history::latest()->get();
    return view('backend.aboutus.history_show',compact('history'));
}//end method  


public function editHistory($id){
    $history = history::find($id);
   return view('backend.aboutus.edit_history',compact('history'));
}//end method


public function historyDelete($id) {
    $history = history::find($id);
    $history->delete();
    $notification =array( 'message' => ' IGPSEC post deleted sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('igpsec.index')->with($notification);  
}// End of delete IGPsec Method     updateHistory


public function updateHistory(Request $request, $id)
    {
        $history= history::find($id);
        $history->title = $request->input('title');
        $history->body = $request->input('body');
        $history->save();
        $notification =array( 'message' => 'History  updated sucessfully',
    'alert-type' =>'success'
);
return redirect()->route('history.show')->with($notification);
}//end method 



}
