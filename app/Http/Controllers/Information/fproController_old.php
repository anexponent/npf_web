<?php

namespace App\Http\Controllers\information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fpro;  
use Image;
use Illuminate\Support\Carbon;              

class fproController extends Controller
{
    public function fproPage (){
        return view('backend.information.fpro_index');
    }//end method
    public function StoreFpro(Request $request){
        
        $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            $save_url = 'upload/fpro/'.$name_gen;

            fpro::insert([

                'fpro_name' => $request->fpro_name,
                'rank' => $request->rank,
                'description' => $request->description,
                'year_service_start' =>$request->year_service_start,
                'year_service_end' =>$request->year_service_end,
                'image' => $save_url,
                'created_at' => Carbon::now(),

            ]); 
            $notification = array(
            'message' => 'record  Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('fpro.index')->with($notification);

    }//end method of fpro


    public function fproDisplay(){
        $fpro= fpro::latest()->get();
        return view('frontend.information.fpro_page',compact('fpro'));
   

}//end method  


  public function viewFpro() {
    $fpro = fpro::all(); 
    return view('backend.information.fpro_view', compact('fpro'));
} //end method FPRO.view


public function editFpro($id){
    $fpro = fpro::find($id);
    $fpro_id = $id;
    return view('backend.information.edit_fpro', compact('fpro','fpro_id'));
}//end FPRO Edit Method


public function fproDelete($id) {
    $fpro = fpro::find($id);
    $fpro->delete();
    $notification =array( 'message' => 'contact deleted sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('fpro.view')->with($notification);  
}// End of delete_product Method 



public function fproUpdate(Request $request, $id){
    $fpro= fpro::find($id);
    $fpro->rank = $request->input('rank');
    $fpro->fpro_name = $request->input('fpro_name');
    $fpro->description = $request->input('description');
    $fpro->image = $request->input('image');
    $fpro->save();   
    $notification =array( 'message' => 'FPRO profile updated sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('fpro.view')->with($notification);  
}// End of update Conatct  Method




} 