<?php

namespace App\Http\Controllers\Sliders;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Image;


class sliderController extends Controller
{
    //////////.........................BACKEND BEGIS HERE ..........................................

    public function sliderView() {
        $sliders = Slider::all(); 
        return view('backend.sliders.slider_view', compact('sliders'));
    } //end method slider.index add_view_slider 

    public function Editslider($id){
        $slider = Slider::find($id);
        $slider_id = $id;
        //dd($slider_id);

        return view('backend.sliders.slider_edit', compact('slider','slider_id'));
    }// End of edit_dpo Method
    
    public function Updateslider(Request $request){
    
        $slider= Slider::find($request->dept_id);
        $slider->slider_tag = $request->slider_tag;
        $slider->title = $request->title;
        $slider->short_description = $request->short_description;
        $slider->long_description = $request->long_description;
    
        if ($request->file('image')) 
        {
            // $image=$request->image;
            // $imagename=time().'.'.$image->getClientOriginalExtension();
            // $request->image->move('build/uploads/slider',$imagename);
            // $slider->image='build/uploads/slider/'.$imagename;

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1920,1080)->save('build/uploads/slider/'.$name_gen);
            $save_url = 'build/uploads/slider/'.$name_gen;
            $slider->image=$save_url;

        }

               
        $slider->save();      
       return redirect()->route('slider.view')->with('error','slider Record Updated Successfully');
    }// End of update_slider Method

    //..........................BACKEND ENDS HERE ..........................................


    //..........................FRONTEND BEGIS HERE ..........................................
    public function Homeslider($id){
        $slider = Slider::find($id);
        $slider_name = $slider->slider;
        //dd($slider_id);

        return view('frontend.sliders.slider_view', compact('slider','slider_name'));
    }// End of edit_dpo Method 

    public function HomeZone($id){
        $zone = Zone::find($id);
        $zone_name = $zone->zone;
        //dd($zone_id);

        return view('frontend.zones.zone_view', compact('zone','zone_name'));
    }// End of edit_dpo Method 




}
