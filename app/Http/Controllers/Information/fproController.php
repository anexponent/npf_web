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

class fproController extends Controller
{
    // Centralized HTMLPurifier instance
    private function purifier(): HTMLPurifier
    {
        $config = HTMLPurifier_Config::createDefault();
        return new HTMLPurifier($config);
    }

    // Centralized image saving function
    private function saveFproImage($file): string
    {
        $name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        $upload_path = public_path('upload/fpro');

        if (!file_exists($upload_path)) {
            mkdir($upload_path, 0775, true);
            chown($upload_path, 'deploy');
            chgrp($upload_path, 'www-data');
        }

        $save_path = $upload_path . '/' . $name;

        Image::make($file)->resize(500, 500)->save($save_path);

        return 'upload/fpro/' . $name;
    }

    public function fproPage()
    {
        return view('backend.information.fpro_index');
    }

    public function StoreFpro(Request $request)
    {
        // Validation
        $request->validate([
            'fpro_name' => 'required',
            'rank' => 'required',
            'description' => 'required',
            'year_service_start' => 'required',
            'year_service_end' => 'nullable',
            'image' => 'required|mimes:jpg,jpeg,png|max:4096',
        ]);

        // Purify description
        $clean_description = $this->purifier()->purify($request->description);

        // Save image
        $save_url = $this->saveFproImage($request->file('image'));

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

        return redirect()->route('fpro.index')->with([
            'message' => 'Record Inserted Successfully',
            'alert-type' => 'success'
        ]);
    }

    public function fproDisplay()
    {
        $fpro = fpro::latest()->first();
        return view('frontend.information.fpro_page', compact('fpro'));
    }

    public function viewFpro()
    {
        $fpro = fpro::all();
        return view('backend.information.fpro_view', compact('fpro'));
    }

    public function editFpro($id)
    {
        $fpro = fpro::findOrFail($id);
        return view('backend.information.edit_fpro', ['fpro' => $fpro, 'fpro_id' => $id]);
    }

    public function fproDelete($id)
    {
        $fpro = fpro::findOrFail($id);

        // Delete old image
        if ($fpro->image && file_exists(public_path($fpro->image))) {
            unlink(public_path($fpro->image));
        }

        $fpro->delete();

        return redirect()->route('fpro.view')->with([
            'message' => 'Record deleted successfully',
            'alert-type' => 'success'
        ]);
    }

    public function fproUpdate(Request $request, $id)
    {
        $fpro = fpro::findOrFail($id);

        // Purify description
        $clean_description = $this->purifier()->purify($request->description);

        // Update fields
        $fpro->rank = $request->input('rank');
        $fpro->fpro_name = $request->input('fpro_name');
        $fpro->description = $clean_description;

        // Image upload if provided
        if ($request->file('image')) {
            // Delete old image
            if ($fpro->image && file_exists(public_path($fpro->image))) {
                unlink(public_path($fpro->image));
            }

            // Save new image
            $fpro->image = $this->saveFproImage($request->file('image'));
        }

        $fpro->save();

        return redirect()->route('fpro.view')->with([
            'message' => 'FPRO Profile Updated Successfully',
            'alert-type' => 'success'
        ]);
    }
}
