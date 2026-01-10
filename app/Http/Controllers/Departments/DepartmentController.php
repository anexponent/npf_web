<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use Mews\Purifier\Facades\Purifier;

class DepartmentController extends Controller
{
    //////////.........................BACKEND BEGIS HERE ..........................................

    public function DepartmentView() {
        $departments = Department::all(); 
        return view('backend.departments.department_view', compact('departments'));
    } //end method department.index add_view_department 

    public function StoreDepartment(Request $request)
    {
        $request->validate([
            'dig_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'rank' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        $departmentData = [
            'dig_name' => $request->dig_name,
            'department' => $request->department,
            'rank' => $request->rank,
            'description' => Purifier::clean($request->description),
        ];
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = hexdec(uniqid()) . '.jpg';
        
            Image::make($image)->resize(400, 450)
                ->save(public_path('build/uploads/department/' . $imagename));
        
            $departmentData['image'] = 'build/uploads/department/' . $imagename;
        }
    
        Department::create($departmentData);
    
        return redirect()->route('department.view')
            ->with('success', 'Department Created Successfully');
    }


    public function EditDepartment($id){
        $department = Department::find($id);
        $department_id = $id;
        //dd($department_id);

        return view('backend.departments.department_edit', compact('department','department_id'));
    }// End of edit_dpo Method
    
    public function UpdateDepartment(Request $request)
    {
    $department = Department::findOrFail($request->dept_id);

    // Validate inputs
    $request->validate([
        'dig_name'    => 'required|string|max:255',
        'department'  => 'required|string|max:255',
        'rank'        => 'nullable|string|max:100',
        'description' => 'nullable|string',
        'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    $department->dig_name    = $request->dig_name;
    $department->department = $request->department;
    $department->rank       = $request->rank;
    $department->description = Purifier::clean($request->description);

    // Handle image upload
    if ($request->hasFile('image')) {

        // Delete old image (important)
        if ($department->image && file_exists(public_path($department->image))) {
            unlink(public_path($department->image));
        }

        $image     = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $imagename = hexdec(uniqid()) . '.' . $extension;

        Image::make($image)
            ->resize(400, 450)
            ->save(public_path('uploads/department/' . $imagename));

        $department->image = 'uploads/department/' . $imagename;
    }

    $department->save();

    return redirect()
        ->route('department.view')
        ->with('success', 'Department Record Updated Successfully');
    }


    //..........................BACKEND ENDS HERE ..........................................


    //..........................FRONTEND BEGIS HERE ..........................................
    public function HomeDepartment($id){
        $department = Department::find($id);
        $department_name = $department->department;
        //dd($department_id);

        return view('frontend.departments.department_view', compact('department','department_name'));
    }// End of edit_dpo Method 

    public function HomeZone($id){
        $zone = Zone::find($id);
        $zone_name = $zone->zone;
        //dd($zone_id);

        return view('frontend.zones.zone_view', compact('zone','zone_name'));
    }// End of edit_dpo Method 




}
