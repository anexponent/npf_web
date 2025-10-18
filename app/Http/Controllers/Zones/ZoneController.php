<?php

namespace App\Http\Controllers\Zones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zone;

class ZoneController extends Controller
{
    public function ZoneView() {
        $zones = zone::all(); 
        return view('backend.zones.zone_view', compact('zones'));
    } //end method zone.index add_view_zone 

    public function EditZone($id){
        $zone = zone::find($id);
        $zone_id = $id;
        //dd($zone_id);

        return view('backend.zones.zone_edit', compact('zone','zone_id'));
    }// End of edit_dpo Method
    
    public function UpdateZone(Request $request){
    
        $zone= zone::find($request->dept_id);
        $zone->dig_name = $request->dig_name;
        $zone->zone = $request->zone;
        $zone->rank = $request->rank;
        $zone->description = $request->description;
    
        if ($request->file('image')) 
        {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('build/uploads/zone',$imagename);
            $zone->image='build/uploads/zone/'.$imagename;
        }
        
        $zone->save();      
       return redirect()->route('zone.view')->with('error','Zone Record Updated Successfully');
    }// End of update_zone Method

    //..........................BACKEND ENDS HERE ..........................................


    //..........................FRONTEND BEGIS HERE ..........................................
    public function HomeZone($id){
        $zone = Zone::find($id);
        $zone_name = $zone->zone;
        //dd($zone_id);

        return view('frontend.zones.zone_view', compact('zone','zone_name'));
    }// End of edit_dpo Method 

}
