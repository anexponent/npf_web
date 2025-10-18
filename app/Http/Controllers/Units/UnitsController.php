<?php

namespace App\Http\Controllers\Units;

use App\Http\Controllers\Controller;
use App\Models\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;


class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function UnitsView() {
        $units = Units::all(); 
        return view('backend.units.units_view', compact('units'));
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function UnitsCreate()
    {
        //This function is used to show the Add new Units Page.
                   
        return view('backend.units.add_units');      

    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function UnitsStore(Request $request)
    {
        $validateData = $request->validate([
            'type_of_unit' => 'required',
            'content' => 'required',
            'name_of_head' => 'required',

        ]);
//Insert unit data into Units table using eloquent ORM
        $data = new Units();
        $data->type_of_unit= $request->type_of_unit;
        $data->name_of_head= $request->name_of_head;
        $data->content= $request->content;
        $data->image = "Null";
        $data->save();
              
       //notification for toaster alert type when a new user is successfully added to the user table
       /* $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        );*/


        return redirect()->route('units.view');
    }

    /**
     * Display the specified resource.
     */
    public function UnitsShow(string $id)
    {
        $UnitsData = Units::find($id);
        $unit_id = $id;

        return view('frontend.units.units', compact('UnitsData','unit_id'));     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editUnits(string $id)
    {
        //
        $UnitsData = Units::find($id);
        $unit_id = $id;
        

        return view('backend.units.units_edit', compact('UnitsData','unit_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUnits(Request $request)
    {
        $unit = Units::find($request->unit_id); // the formation_id is a hidden field gotten from formation_edit page
        $unit->type_of_unit = $request->type_of_unit;
        $unit->name_of_head = $request->name_of_head;
        $unit->content = $request->content;

        if ($request->file('image')) 
        {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('build/uploads/unit',$imagename);
            $unit->image='build/uploads/unit/'.$imagename;
        }
           
        
        $unit->save();      
       return redirect()->route('units.view')->with('error','units Record Updated Successfully');
    }

    public function UnitDelete($id){

        $unit = Units::find($id);
        $unit->delete();

        //notification for toaster alert type when a user deleted successfully added to the user table
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'danger'
        );


        return redirect()->route('units.view')->with($notification);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
