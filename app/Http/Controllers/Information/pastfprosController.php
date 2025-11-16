<?php

namespace App\Http\Controllers\information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pastfpro;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use Illuminate\Support\Carbon;
use Mews\Purifier\Facades\Purifier;
use Log; 

class pastfprosController extends Controller
{
    public function pastfproPage (){
        return view('backend.information.pastfpro_index');
    }


    public function StorepastFpro(Request $request){

        Log::info("Here");
        // Validate input
        $request->validate([
            'fpro_name' => 'required|string|max:255',
            'rank' => 'required|string|max:255',
            'description' => 'nullable|string',
            'year_service_start' => 'required|integer',
            'year_service_end' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120'
        ]);

        // Purify HTML
        $clean_description = Purifier::clean($request->description);

        // Ensure upload folder exists
        if (!file_exists('upload/pastfpro')) {
            mkdir('upload/pastfpro', 0777, true);
        }

        // Image upload
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(500,500)->save('upload/pastfpro/'.$name_gen);

        $save_url = 'upload/pastfpro/'.$name_gen;

        pastfpro::insert([
            'fpro_name' => $request->fpro_name,
            'rank' => $request->rank,
            'description' => $clean_description,
            'year_service_start' => $request->year_service_start,
            'year_service_end' => $request->year_service_end,
            'pastfpro_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'record Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('pastfpro.index')->with($notification);
    }


    public function pastfproDisplay(){
        $pastfpro = pastfpro::all();
        return view('frontend.information.pastfpro_page', compact('pastfpro'));
    }


    public function pastviewFpro() {
        $pastfpro = pastfpro::all();
        return view('backend.information.pastfpro_view', compact('pastfpro'));
    }


    public function changePastfpro($id){
        $pastfpro = pastfpro::findOrFail($id);
        $pastfpro_id = $id;
        return view('backend.information.pastfpro_edit', compact('pastfpro','pastfpro_id'));
    }


    public function pastfproDelete($id) {
        $pastfpro = pastfpro::findOrFail($id);

        // Safely delete old image
        if ($pastfpro->pastfpro_image && file_exists($pastfpro->pastfpro_image)) {
            unlink($pastfpro->pastfpro_image);
        }

        $pastfpro->delete();

        $notification = [
            'message' => 'past FPRO profile deleted successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('pastfpro.view')->with($notification);
    }


    public function pastfproUpdate(Request $request){

        $psfpro_id = $request->id;

        // Purify HTML
        $clean_description = Purifier::clean($request->description);

        // Check if image exists
        if ($request->file('pastfpro_image')) {

            $request->validate([
                'pastfpro_image' => 'image|mimes:jpg,jpeg,png,webp|max:5120'
            ]);

            $image = $request->file('pastfpro_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(500,500)->save('uploads/pastfpro/'.$name_gen);
            $save_url = 'uploads/pastfpro/'.$name_gen;

            pastfpro::findOrFail($psfpro_id)->update([
                'fpro_name' => $request->fpro_name,
                'rank' => $request->rank,
                'description' => $clean_description,
                'year_service_start' => $request->year_service_start,
                'year_service_end' => $request->year_service_end,
                'pastfpro_image' => $save_url,
            ]);

            $notification = [
                'message' => 'Past FPRO profile Updated Successfully',
                'alert-type' => 'success'
            ];

            return redirect()->route('pastfpro.view')->with($notification);

        } else {

            pastfpro::findOrFail($psfpro_id)->update([
                'fpro_name' => $request->fpro_name,
                'rank' => $request->rank,
                'description' => $clean_description,
                'year_service_start' => $request->year_service_start,
                'year_service_end' => $request->year_service_end,
            ]);

            $notification = [
                'message' => 'Past FPRO profile updated without Image Successfully',
                'alert-type' => 'success'
            ];

            return redirect()->route('pastfpro.view')->with($notification);
        }
    }

}
