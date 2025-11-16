<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use Mews\Purifier\Facades\Purifier;


class serviceController extends Controller
{
    //////////.........................BACKEND BEGIS HERE ..........................................

    public function ServiceView() {
        $services = Service::all(); 
        return view('backend.services.service_view', compact('services'));
    } //end method service.index add_view_service 

    public function AddService() {
        return view('backend.services.service_add');
    } //end method service.index add_view_service 

    public function StoreService(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'service_tag' => 'nullable|string|max:100',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $serviceData = [
            'title' => $request->title,
            'service_tag' => $request->service_tag,
            'short_description' => $request->short_description,
            // Clean HTML for long_description
            'long_description' => Purifier::clean($request->long_description),
        ];

        // Handle image if uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = hexdec(uniqid()) . '.jpg'; // Force safe extension

            // Resize and save image
            Image::make($image)->resize(1920, 1080)->save(public_path('uploads/service/' . $imagename));
            $serviceData['image'] = 'uploads/service/' . $imagename;
        }

        // Insert into DB
        Service::create($serviceData);

        return redirect()->route('service.view')->with('success', 'Service Created Successfully');
    }


    public function Editservice($id){
        $service = Service::find($id);
        $service_id = $id;
        //dd($service_id);

        return view('backend.services.service_edit', compact('service','service_id'));
    }// End of edit_dpo Method
    
    public function Updateservice(Request $request)
    {
        $service = Service::findOrFail($request->dept_id);

        // Validate input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'service_tag' => 'nullable|string|max:100',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $service->title = $request->title;
        $service->service_tag = $request->service_tag;
        $service->short_description = $request->short_description;
        $service->long_description = Purifier::clean($request->long_description); // Safe HTML

        // Handle image if uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = hexdec(uniqid()) . '.jpg';

            Image::make($image)->resize(1920, 1080)->save(public_path('uploads/service/' . $imagename));
            $service->image = 'uploads/service/' . $imagename;
        }

        $service->save();

        return redirect()->route('service.view')->with('success', 'Service Record Updated Successfully');
    }
    
    //..........................BACKEND ENDS HERE ..........................................


    //..........................FRONTEND BEGIS HERE ..........................................
      public function Homeservice(){
        // $service = Service::find($id);
        // $service_name = $service->service;
        // //dd($service_id);
        // return view('frontend.services.service_view', compact('service','service_name'));
        return view('frontend.services.service_view');
    }// End of edit_dpo Method 

    public function HomeZone($id){
        $zone = Zone::find($id);
        $zone_name = $zone->zone;
        //dd($zone_id);

        return view('frontend.zones.zone_view', compact('zone','zone_name'));
    }// End of edit_dpo Method 

    //..........................SAMPLE PAGES BEGIS HERE ..........................................
    public function departmentsample() {
        // return view('frontend.sample_pages.department');
        return view('frontend.sample_pages.all_news');
    } //end method 

    public function zonesample() {
        // return view('frontend.sample_pages.zone');
        return view('frontend.sample_pages.news_details');
    } //end method fprosample

    public function visionsample() {
        return view('frontend.sample_pages.vision');
    } //end method 

    public function formationsample() {
        return view('frontend.sample_pages.formation');
    } //end method 

    public function informationsample() {
        return view('frontend.sample_pages.information');
    } //end method 

    public function management_teamsample() {
        return view('frontend.sample_pages.management_team');
    } //end method 

    public function fprosample() {
        return view('frontend.sample_pages.fpro');
    } //end method 

    public function fprossample() {
        return view('frontend.sample_pages.fpros');
    } //end method 

    //..........................SAMPLE ENDS BEGIS HERE ..........................................
}
