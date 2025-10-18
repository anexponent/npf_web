<?php

namespace App\Http\Controllers\Formations;

use App\Http\Controllers\Controller;
use App\Models\formations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function FormationsView() {
        $formations = formations::all();
        return view('backend.formations.formations_view', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function FormationsCreate()
    {
        //This function is used to show the Add new formation Page.

        return view('backend.formations.add_formation');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function FormationsStore(Request $request)
    {
        $validateData = $request->validate([
            'type_of_formation' => 'required',
            'content' => 'required',
            'name_of_head' => 'required',

        ]);
//Insert formation data into Formation table using eloquent ORM
 $image = $request->file('image');
$name_gen = time().'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

Image::make($image)->resize(600,400)->save('build/uploads/formation/'.$name_gen);
$save_url = 'build/uploads/formation/'.$name_gen;

formations::insert([
    'type_of_formation' => $request->type_of_formation,
    'content' => $request->content,
    'name_of_head' => $request->name_of_head,
    'image' => $save_url,
    'created_at' => Carbon::now(),

]);

//
    /*    $data = new formations();
        $data->type_of_formation= $request->type_of_formation;
        $data->content= $request->content;
        $data->name_of_head = $request->name_of_head;
        if ($request->file('image'))
        {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('build/uploads/formation',$imagename);
            $data->image='build/uploads/formation/'.$imagename;
        }

        $data->save();

       //notification for toaster alert type when a new user is successfully added to the user table
       /* $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        );*/


        return redirect()->route('formations.view');
    }

    /**
     * Display the specified resource.
     */
    public function FormationsShow(string $id)
    {
        $formationsData = Formations::find($id);
        $formation_id = $id;

        return view('frontend.formations.formations', compact('formationsData','formation_id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editFormations(string $id)
    {
        //
        $formationsData = Formations::find($id);
        $formation_id = $id;


        return view('backend.formations.formations_edit', compact('formationsData','formation_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateFormations(Request $request)
    {
        $formation = formations::find($request->formation_id); // the formation_id is a hidden field gotten from formation_edit page
        $formation->type_of_formation = $request->type_of_formation;
        $formation->name_of_head = $request->name_of_head;
        $formation->content = $request->content;

        if ($request->file('image'))
        {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('build/uploads/formation',$imagename);
            $formation->image='build/uploads/formation/'.$imagename;
        }


        $formation->save();
       return redirect()->route('formations.view')->with('error','Formations Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function FormationDelete($id){

        $formation = Formations::find($id);
        $formation->delete();

        //notification for toaster alert type when a user deleted successfully added to the user table
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'danger'
        );


        return redirect()->route('formations.view')->with($notification);
    }

    public function destroy(string $id)
    {
        //
    }
}