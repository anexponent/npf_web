<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Past_Igps;


class PastIgps extends Controller
{
    public function AllOurPastIgp(){

        $pstigpteam = Past_Igps::all();
        return view('backend.home.Past_Igps.all_mgt', compact('pstigpteam'));
        }//end method

        public function AddTPastIgp(){
            return view('backend.home.Past_Igps.add_mgt');

        }

        public function StorePastIgp(Request $request){
            $request->validate([
                'full_name' => 'required',
                'duration' => 'required',
                'designation' => 'required',
                'team_image' => 'required',

            ],[

                'full_name.required' => 'Full Name is Required',
                'duration.required' => 'Duration  is Required',
                'designation.required' => 'Designation/Posting is Required',
                'team_image.required' => 'portrait  is Required',
            ]);

            $image = $request->file('team_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

                Image::make($image)->resize(500,500)->save('upload/PastIgps_Images/'.$name_gen);
                $save_url = 'upload/PastIgps_Images/'.$name_gen;

                Past_Igps::insert([

                    'full_name' => $request->full_name,
                    'duration_service' => $request->duration,
                    'designation' => $request->designation,
                    'team_image' => $save_url,
                    'created_at' => Carbon::now(),

                ]);
                $notification = array(
                'message' => 'Management Added Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('ourpastigps.page')->with($notification);

        }



    public function EditPastIgp($id){

        $pstigpteam = Past_Igps::findOrFail($id);

            return view('backend.home.Past_Igps.mgt_edit',compact('pstigpteam'));
        }// End Method


       public function UpdatePastIgp(Request $request){

            $mgt_id = $request->id;

            if ($request->file('team_image')) {
                $image = $request->file('team_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

                Image::make($image)->resize(500,500)->save('upload/PastIgps_Images/'.$name_gen);
                $save_url = 'upload/PastIgps_Images/'.$name_gen;

                Past_Igps::findOrFail($mgt_id)->update([
                    'full_name' => $request->full_name,
                    'duration_service' => $request->duration,
                    'designation' => $request->designation,
                    'team_image' => $save_url,

                ]);
                $notification = array(
                'message' => 'Management Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('ourpastigps.page')->with($notification);

            } else{

                Past_Igps::findOrFail($mgt_id)->update([
                    'full_name' => $request->full_name,
                    'duration_service' => $request->duration,
                    'designation' => $request->designation,



                ]);
                $notification = array(
                'message' => 'Management Updated without Image Successfully',
                'alert-type' => 'success'
            );

           return redirect()->route('ourpastigps.page')->with($notification);

            } // end Else


        }//end method

        public function DeletePastIgp($id){
        $pstigpteam = Past_Igps::findOrFail($id);
        $img = $pstigpteam->team_image;
        unlink($img);

        Past_Igps::findOrFail($id)->delete();

             $notification = array(
            'message' => 'Management Team Deleted Successfully',
            'alert-type'=>'success'
            );


            return redirect()->back()->with($notification);


        }// end method

        public function AllOurPastIgpFront(){
            //$pstigpteamfront = Past_Igps::all();

        $pstigpteamfront = Past_Igps::orderBy('duration_service', 'asc')->paginate(8);
        return view('frontend.home.Past_Igps.all_mgt', compact('pstigpteamfront'));
        }//end method


}