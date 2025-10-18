<?php

namespace App\Http\Controllers\information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pastfpro;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use Illuminate\Support\Carbon;

class pastfprosController extends Controller
{
    public function pastfproPage (){
        return view('backend.information.pastfpro_index');
    }//end method 


    public function StorepastFpro(Request $request){
        
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(500,500)->save('upload/pastfpro/'.$name_gen);
        $save_url = 'upload/pastfpro/'.$name_gen;

            pastfpro::insert([

                'fpro_name' => $request->fpro_name,
                'rank' => $request->rank,
                'description' => $request->description,
                'year_service_start' =>$request->year_service_start,
                'year_service_end' =>$request->year_service_end,
                'pastfpro_image' => $save_url,
                'created_at' => Carbon::now(),

            ]); 
            $notification = array(
            'message' => 'record  Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('pastfpro.index')->with($notification);

    }//end method of Pastfpro  Store


    public function pastfproDisplay(){
        $pastfpro= pastfpro::all();
        return view('frontend.information.pastfpro_page',compact('pastfpro'));
   

}//end method  


public function pastviewFpro() {
    $pastfpro = pastfpro::all(); 
    return view('backend.information.pastfpro_view', compact('pastfpro'));
} //end method FPRO.view


public function changePastfpro($id){
    $pastfpro = pastfpro::find($id);
    $pastfpro_id = $id;
    return view('backend.information.pastfpro_edit', compact('pastfpro','pastfpro_id'));
}//end FPRO Edit Method


public function pastfproDelete($id) {
    $pastfpro = pastfpro::findOrFail($id);
    $img = $pastfpro->pastfpro_image;
     unlink($img);
    pastfpro::findOrFail($id)->delete();

    $notification =array( 'message' => 'past FPRO profile deleted sucessfully',
    'alert-type' =>'success' );
    return redirect()->route('pastfpro.view')->with($notification);  
}// End of delete_product Method 



public function pastfproUpdate(Request $request){
    
    $psfpro_id = $request->id;

    if ($request->file('')) {
        $image = $request->file('pastfpro_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(500,500)->save('upload/pastfpro/'.$name_gen);
        $save_url = 'upload/pastfpro/'.$name_gen;

        pastfpro::findOrFail($psfpro_id)->update([
        'fpro_name' => $request->fpro_name,
        'rank' => $request->rank,
        'description' => $request->description,
        'year_service_start' =>$request->year_service_start,
        'year_service_end' =>$request->year_service_end,
        'pastfpro_image' => $save_url,
        ]); 
        $notification = array(
        'message' => 'Past FPRO profile Updated Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->route('pastfpro.view')->with($notification);

    } else{

        pastfpro::findOrFail($psfpro_id)->update([
        'fpro_name' => $request->fpro_name,
        'rank' => $request->rank,
        'description' => $request->description,
        'year_service_start' =>$request->year_service_start,
        'year_service_end' =>$request->year_service_end,
           
        ]); 
        $notification = array(
        'message' => 'Past FPRO profile updated without Image Successfully', 
        'alert-type' => 'success'
    );

   return redirect()->route('pastfpro.view')->with($notification);

    } // end Else 


}


}
