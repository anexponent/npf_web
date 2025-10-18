<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Managem_Team;

class ManagemController extends Controller
{
    //
    public function AllOurMgtTeam(){
    
        $mgtteam = Managem_Team::all();
        return view('backend.home.Mgt_Team.all_mgt', compact('mgtteam'));
        }//end method

        public function AddMgtTeam(){
            return view('backend.home.Mgt_Team.add_mgt');
            
        }

        public function StoreMgtTeam(Request $request){
            $request->validate([
                'full_name' => 'required',
                'rank' => 'required',
                'designation' => 'required',
                'team_image' => 'required',
    
            ],[
    
                'full_name.required' => 'Full Name is Required',
                'rank.required' => 'Rank  is Required',
                'designation.required' => 'Designation/Posting is Required',
                'team_image.required' => 'portrait  is Required',
            ]);
    
            $image = $request->file('team_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
    
                Image::make($image)->resize(500,500)->save('upload/MgtTeam_Images/'.$name_gen);
                $save_url = 'upload/MgtTeam_Images/'.$name_gen;
    
                Managem_Team::insert([
                    
                    'full_name' => $request->full_name,
                    'rank' => $request->rank,
                    'designation' => $request->designation,
                    'team_image' => $save_url,
                    'created_at' => Carbon::now(),
    
                ]); 
                $notification = array(
                'message' => 'Management Added Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->route('ourmgtTeam.page')->with($notification);
            
        }

        

    public function EditMgtTeam($id){

        $mgtteam = Managem_Team::findOrFail($id);
        
            return view('backend.home.Mgt_Team.mgt_edit',compact('mgtteam'));
        }// End Method
    
    
       public function UpdateOurMgtTeam(Request $request){
    
            $mgt_id = $request->id;
    
            if ($request->file('team_image')) {
                $image = $request->file('team_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
    
                Image::make($image)->resize(500,500)->save('upload/MgtTeam_Images/'.$name_gen);
                $save_url = 'upload/MgtTeam_Images/'.$name_gen;
    
                Managem_Team::findOrFail($mgt_id)->update([
                    'full_name' => $request->full_name,
                    'rank' => $request->rank,
                    'designation' => $request->designation,
                    'team_image' => $save_url,
    
                ]); 
                $notification = array(
                'message' => 'Management Updated with Image Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->route('ourmgtTeam.page')->with($notification);
    
            } else{
    
                Managem_Team::findOrFail($mgt_id)->update([
                    'full_name' => $request->full_name,
                    'rank' => $request->rank,
                    'designation' => $request->designation,
                   
                     
    
                ]); 
                $notification = array(
                'message' => 'Management Updated without Image Successfully', 
                'alert-type' => 'success'
            );
    
           return redirect()->route('ourmgtTeam.page')->with($notification);
    
            } // end Else 
    
        
        }//end method
        
        public function DeleteMgtTeam($id){
        
        
        $mgtteam = Managem_Team::findOrFail($id);
        $img = $mgtteam->team_image;
        unlink($img);
        
        Managem_Team::findOrFail($id)->delete();
        
             $notification = array(
            'message' => 'Management Team Deleted Successfully',
            'alert-type'=>'success'
            );
       
    
            return redirect()->back()->with($notification);
        
        
        }// end method

        public function AllOurMgtTeamFront(){
        $mgtteam = Managem_Team::all();
        return view('frontend.home.Mgt_Team.all_mgt', compact('mgtteam'));
            
        }

}