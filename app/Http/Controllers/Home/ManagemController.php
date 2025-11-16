<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Managem_Team;
use HTMLPurifier;
use HTMLPurifier_Config;
use Log;

class ManagemController extends Controller
{
    public function AllOurMgtTeam(){
        $mgtteam = Managem_Team::all();
        Log::info($mgtteam);
        return view('backend.home.Mgt_Team.all_mgt', compact('mgtteam'));
    }

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
            'team_image.required' => 'Portrait is Required',
        ]);

        $image = $request->file('team_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        $image_save_path = public_path('upload/MgtTeam_Images/'.$name_gen);
        Image::make($image)->resize(500,500)->save($image_save_path);

        $save_url = 'upload/MgtTeam_Images/'.$name_gen;

        // Purify designation in case user inputs HTML
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_designation = $purifier->purify($request->designation);

        Managem_Team::insert([
            'full_name' => $request->full_name,
            'rank' => $request->rank,
            'designation' => $clean_designation,
            'team_image' => $save_url,
            'created_at' => Carbon::now(),
        ]); 

        $notification = [
            'message' => 'Management Added Successfully', 
            'alert-type' => 'success'
        ];

        return redirect()->route('ourmgtTeam.page')->with($notification);
    }

    public function EditMgtTeam($id){
        $mgtteam = Managem_Team::findOrFail($id);
        return view('backend.home.Mgt_Team.mgt_edit',compact('mgtteam'));
    }

    public function UpdateOurMgtTeam(Request $request){
        $mgt_id = $request->id;

        // Purify designation
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_designation = $purifier->purify($request->designation);
        Log::info("Here");
        if ($request->file('team_image')) {
            $image = $request->file('team_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            $image_save_path = public_path('upload/MgtTeam_Images/'.$name_gen);
            Log::info($image_save_path);
            Image::make($image)->resize(500,500)->save($image_save_path);

            $save_url = 'upload/MgtTeam_Images/'.$name_gen;

            Managem_Team::findOrFail($mgt_id)->update([
                'full_name' => $request->full_name,
                'rank' => $request->rank,
                'designation' => $clean_designation,
                'team_image' => $save_url,
            ]);

            $notification = [
                'message' => 'Management Updated with Image Successfully', 
                'alert-type' => 'success'
            ];

        } else {
            Managem_Team::findOrFail($mgt_id)->update([
                'full_name' => $request->full_name,
                'rank' => $request->rank,
                'designation' => $clean_designation,
            ]);

            $notification = [
                'message' => 'Management Updated without Image Successfully', 
                'alert-type' => 'success'
            ];
        }

        return redirect()->route('ourmgtTeam.page')->with($notification);
    }

    public function DeleteMgtTeam($id){
        $mgtteam = Managem_Team::findOrFail($id);
        if (file_exists(public_path($mgtteam->team_image))) {
            unlink(public_path($mgtteam->team_image));
        }

        Managem_Team::findOrFail($id)->delete();

        $notification = [
            'message' => 'Management Team Deleted Successfully',
            'alert-type'=>'success'
        ];

        return redirect()->back()->with($notification);
    }

    public function AllOurMgtTeamFront(){
        $mgtteam = Managem_Team::all();
        return view('frontend.home.Mgt_Team.all_mgt', compact('mgtteam'));
    }
}
