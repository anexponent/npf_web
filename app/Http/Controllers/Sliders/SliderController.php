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
use Intervention\Image\Facades\Image;
use Mews\Purifier\Facades\Purifier;


class sliderController extends Controller
{
    //////////.........................BACKEND BEGIS HERE ..........................................

    public function sliderView() {
        $sliders = Slider::all(); 
        return view('backend.sliders.slider_view', compact('sliders'));
    } //end method slider.index add_view_slider 

    public function StoreSlider(Request $request)
    {
        $request->validate([
            'slider_tag' => 'nullable|string|max:100',
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        $sliderData = [
            'slider_tag' => $request->slider_tag,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => Purifier::clean($request->long_description),
        ];
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = hexdec(uniqid()) . '.jpg';
        
            Image::make($image)->resize(1920, 1080)->save(public_path('uploads/slider/' . $imagename));
        
            $sliderData['image'] = 'uploads/slider/' . $imagename;
        }
    
        Slider::create($sliderData);
    
        return redirect()->route('slider.view')->with('success', 'Slider Created Successfully');
    }

    public function Editslider($id){
        $slider = Slider::find($id);
        $slider_id = $id;
        //dd($slider_id);

        return view('backend.sliders.slider_edit', compact('slider','slider_id'));
    }// End of edit_dpo Method
    
    public function Updateslider(Request $request)
    {
        $slider = Slider::findOrFail($request->dept_id);

        // Validate input
        $request->validate([
            'slider_tag' => 'nullable|string|max:100',
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $slider->slider_tag = $request->slider_tag;
        $slider->title = $request->title;
        $slider->short_description = $request->short_description;
        $slider->long_description = Purifier::clean($request->long_description); // Safe HTML

        // Handle image if uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = hexdec(uniqid()) . '.jpg'; // Force .jpg

            Image::make($image)->resize(1920, 1080)->save(public_path('uploads/slider/' . $imagename));

            $slider->image = 'uploads/slider/' . $imagename;
        }

        $slider->save();

        return redirect()->route('slider.view')->with('success', 'Slider Record Updated Successfully');
    }

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
