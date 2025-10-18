<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pastfpro;
use Illuminate\Support\Carbon;

class pastfprosController extends Controller
{
    public function pastfproPage (){
        return view('backend.information.pastfpro_index');
    }//end method 


    public function StorepastFpro(Request $request){
        
            pastfpro::insert([

                'fpro_name' => $request->fpro_name,
                'rank' => $request->rank,
                'description' => $request->description,
                'year_service_start' =>$request->year_service_start,
                'year_service_end' =>$request->year_service_end,
                'created_at' => Carbon::now(),

            ]); 
            $notification = array(
            'message' => 'record  Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('pastfpro.index')->with($notification);

    }//end method of Pastfpro  pastfproDisplay

    public function pastfproDisplay(){
        $pastfpro= pastfpro::latest()->get();
        return view('frontend.information.pastfpro_page',compact('pastfpro'));
   

}//end method  


}
