<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fpro;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use Illuminate\Support\Carbon;
use HTMLPurifier;
use HTMLPurifier_Config;
use Log;

class fproController extends Controller
{
    public function fproPage () {
        return view('backend.information.fpro_index');
    }

    public function StoreFpro(Request $request){
        // Validation
        $request->validate([
            'fpro_name' => 'required',
            'rank' => 'required',
            'description' => 'required',
            'year_service_start' => 'required',
            'year_service_end' => 'nullable',
            'image' => 'required|mimes:jpg,jpeg,png|max:4096',
        ]);

        // Purify HTML
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_description = $purifier->purify($request->description);

        // Image Upload
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        $save_path = public_path('uploads/fpro/'.$name_gen);
        Image::make($image)->resize(500,500)->save($save_path);

        $save_url = 'uploads/fpro/'.$name_gen;

        // Save record
        fpro::insert([
            'fpro_name' => $request->fpro_name,
            'rank' => $request->rank,
            'description' => $clean_description,
            'year_service_start' => $request->year_service_start,
            'year_service_end' => $request->year_service_end,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Record Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('fpro.index')->with($notification);
    }


    public function fproDisplay(){
        $fpro = fpro::latest()->first();
        return view('frontend.information.fpro_page',compact('fpro'));
    }


    public function viewFpro() {
        $fpro = fpro::all(); 
        return view('backend.information.fpro_view', compact('fpro'));
    }


    public function editFpro($id){
        $fpro = fpro::find($id);
        $fpro_id = $id;
        return view('backend.information.edit_fpro', compact('fpro','fpro_id'));
    }


    public function fproDelete($id) {
        $fpro = fpro::find($id);

        // Delete image if exists
        if ($fpro->image && file_exists(public_path($fpro->image))) {
            unlink(public_path($fpro->image));
        }

        $fpro->delete();

        $notification = [
            'message' => 'Contact deleted successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('fpro.view')->with($notification);  
    }


    public function fproUpdate(Request $request, $id){
        $fpro = fpro::find($id);

        // Purify HTML
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_description = $purifier->purify($request->description);

        // Update fields
        $fpro->rank = $request->input('rank');
        $fpro->fpro_name = $request->input('fpro_name');
        $fpro->description = $clean_description;

        // Image upload if provided
        if ($request->file('image')) {

            // delete old image
            if ($fpro->image && file_exists(public_path($fpro->image))) {
                unlink(public_path($fpro->image));
            }

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            $save_path = public_path('upload/fpro/'.$name_gen);
            Image::make($image)->resize(500,500)->save($save_path);

            $save_url = 'upload/fpro/'.$name_gen;
            $fpro->image = $save_url;
        }

        $fpro->save();

        $notification = [
            'message' => 'FPRO Profile Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('fpro.view')->with($notification);  
    }

}
