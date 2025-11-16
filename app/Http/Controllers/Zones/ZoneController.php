<?php

namespace App\Http\Controllers\Zones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zone;
use Intervention\Image\Facades\Image;
use Mews\Purifier\Facades\Purifier;

class ZoneController extends Controller
{
    // ======================= Backend =======================
    public function ZoneView() {
        $zones = zone::all(); 
        return view('backend.zones.zone_view', compact('zones'));
    }

    public function EditZone($id){
        $zone = zone::findOrFail($id);
        $zone_id = $id;
        return view('backend.zones.zone_edit', compact('zone','zone_id'));
    }

    public function UpdateZone(Request $request){
    
        $zone = zone::findOrFail($request->dept_id);
        $zone->dig_name = $request->dig_name;
        $zone->zone = $request->zone;
        $zone->rank = $request->rank;
        $zone->description = Purifier::clean($request->description);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = hexdec(uniqid()) . '.jpg'; // Force safe .jpg extension

            Image::make($image)->resize(400, 450)
                ->save(public_path('uploads/zone/' . $imagename));

            $zone->image = 'uploads/zone/' . $imagename;
        }
        
        $zone->save();      
        return redirect()->route('zone.view')->with('success','Zone Record Updated Successfully');
    }

    // ======================= Frontend =======================
    public function HomeZone($id){
        $zone = zone::findOrFail($id);
        $zone_name = $zone->zone;
        return view('frontend.zones.zone_view', compact('zone','zone_name'));
    }
}
