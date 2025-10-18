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

    public function StoreService(Request $request){

        // dd($request->all());

        $validatedData = $request->validate([
            'title' => 'required',           
            'short_description' => 'required',           
            'long_description' => 'required',           
        ]);

        Service::insert([
            'title' => $request->title,
            'service_tag' => $request->service_tag,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);

         return redirect()->route('service.view')->with('error','Services Created Successfully');

    } // end mehtod 

    public function Editservice($id){
        $service = Service::find($id);
        $service_id = $id;
        //dd($service_id);

        return view('backend.services.service_edit', compact('service','service_id'));
    }// End of edit_dpo Method
    
       public function Updateservice(Request $request){
    //dd($request->all());
        $service= Service::find($request->dept_id);
        $service->service_tag = $request->service_tag;
        $service->title = $request->title;
        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;
    
        if ($request->file('image')) 
        {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('build/uploads/service',$imagename);
            $service->image='build/uploads/service/'.$imagename;
        }
        
        $service->save();      
       return redirect()->route('service.view')->with('error','service Record Updated Successfully');
    }// End of update_service Method
    
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
