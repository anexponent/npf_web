<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Zone;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Mews\Purifier\Facades\Purifier;

class DepartmentController extends Controller
{
    /* =========================
        BACKEND
    ========================= */

    public function DepartmentView()
    {
        $departments = Department::all();
        return view('backend.departments.department_view', compact('departments'));
    }

    public function StoreDepartment(Request $request)
    {
        $request->validate([
            'dig_name'    => 'required|string|max:255',
            'department'  => 'required|string|max:255',
            'rank'        => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = [
            'dig_name'    => $request->dig_name,
            'department'  => $request->department,
            'rank'        => $request->rank,
            'description' => Purifier::clean($request->description),
        ];

        if ($request->hasFile('image')) {
            $imageName = hexdec(uniqid()) . '.jpg';

            Image::make($request->file('image'))
                ->resize(400, 450, function ($c) {
                    $c->aspectRatio();
                    $c->upsize();
                })
                ->save(public_path('uploads/department/' . $imageName));

            $data['image'] = 'uploads/department/' . $imageName;
        }

        Department::create($data);

        return redirect()
            ->route('department.view')
            ->with('success', 'Department Created Successfully');
    }

    public function EditDepartment($id)
    {
        $department = Department::findOrFail($id);
        return view('backend.departments.department_edit', compact('department'));
    }

    public function UpdateDepartment(Request $request)
    {
        $department = Department::findOrFail($request->dept_id);

        $request->validate([
            'dig_name'    => 'required|string|max:255',
            'department'  => 'required|string|max:255',
            'rank'        => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $department->dig_name    = $request->dig_name;
        $department->department = $request->department;
        $department->rank       = $request->rank;
        $department->description = Purifier::clean($request->description);

        if ($request->hasFile('image')) {

            // SAFE delete old image
            if ($department->image) {
                $oldPath = public_path($department->image);
                if (is_file($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $imageName = hexdec(uniqid()) . '.' .
                $request->file('image')->getClientOriginalExtension();

            Image::make($request->file('image'))
                ->resize(400, 450, function ($c) {
                    $c->aspectRatio();
                    $c->upsize();
                })
                ->save(public_path('uploads/department/' . $imageName));

            $department->image = 'uploads/department/' . $imageName;
        }

        $department->save();

        return redirect()
            ->route('department.view')
            ->with('success', 'Department Record Updated Successfully');
    }

    /* =========================
        FRONTEND
    ========================= */

    public function HomeDepartment($id)
    {
        $department = Department::findOrFail($id);

        return view('frontend.departments.department_view', [
            'department'       => $department,
            'department_name'  => $department->department,
        ]);
    }

    public function HomeZone($id)
    {
        $zone = Zone::findOrFail($id);

        return view('frontend.zones.zone_view', [
            'zone'      => $zone,
            'zone_name' => $zone->zone,
        ]);
    }
}
