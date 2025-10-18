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
use Image;

class DepartmentController extends Controller
{
    //////////.........................BACKEND BEGIS HERE ..........................................

    public function DepartmentView() {
        $departments = Department::all(); 
        return view('backend.departments.department_view', compact('departments'));
    } //end method department.index add_view_department 

    public function EditDepartment($id){
        $department = Department::find($id);
        $department_id = $id;
        //dd($department_id);

        return view('backend.departments.department_edit', compact('department','department_id'));
    }// End of edit_dpo Method
    
    public function UpdateDepartment(Request $request){
    
        $department= Department::find($request->dept_id);
        $department->dig_name = $request->dig_name;
        $department->department = $request->department;
        $department->rank = $request->rank;
        $department->description = $request->description;
    
        if ($request->file('image')) 
        {
            // $image=$request->image;
            // $imagename=time().'.'.$image->getClientOriginalExtension();
            // $request->image->move('build/uploads/department',$imagename);
            // $department->image='build/uploads/department/'.$imagename;

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,450)->save('build/uploads/department/'.$name_gen);
            $save_url = 'build/uploads/department/'.$name_gen;
            $department->image=$save_url;
        }
        
        $department->save();      
       return redirect()->route('department.view')->with('error','Department Record Updated Successfully');
    }// End of update_department Method

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
