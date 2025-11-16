<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    public function Destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/npf/login');
    } //End Method

    public function AdminRegister(){
        $user = Auth::user();
        if (!$user->can('manage users')) {
            abort(403, 'Unauthorized action.');
        }

        return view('backend.admin.admin_register');
    }//end method

    public function AdminRegisterCreate(Request $request){

        $user = Auth::user();
        if (!$user->can('manage users')) {
            abort(403, 'Unauthorized action.');
        }
        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:65',
            'ap_number' => 'required|unique:users|max:9',
            'password' => 'required',           
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'rank' => $request->rank,
            'ap_number' => $request->ap_number,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

         return redirect()->route('admin.view')->with('error','Admin Created Successfully');

    } // end mehtod 

    public function AdminView() {
        $user = Auth::user();
        if (!$user->can('manage users')) {
            abort(403, 'Unauthorized action.');
        }
        $dpos = User::where('id','>=',1)->orderby('name','ASC')->get(); 
        return view('backend.admin.admin_view', compact('dpos'));
    } //end method admin.index add_view_dpo 

    public function DeleteAdmin($id) {
        $user = Auth::user();
        if (!$user->can('manage users')) {
            abort(403, 'Unauthorized action.');
        }
        $dpo = User::find($id);
        $dpo->delete();
        return redirect()->back()->with('error','DPO Deleted Successfully');
    }// End of delete_product Method //  SAVE THE DELETED RECORDS IN ANNTHER TABLE

    public function EditAdmin($id){
        $user = Auth::user();
        if (!$user->can('manage users')) {
            abort(403, 'Unauthorized action.');
        }
        $dpo = User::find($id);
        $dpo_id = $id;
        return view('backend.admin.admin_edit', compact('dpo','dpo_id'));
    }// End of edit_dpo Method
    
    public function UpdateAdmin(Request $request, $id){
        $user = Auth::user();
        if (!$user->can('manage users')) {
            abort(403, 'Unauthorized action.');
        }
        $dpo= User::find($id);
        $dpo->name = $request->name;
        $dpo->email = $request->email;
        $dpo->rank = $request->rank;
        $dpo->ap_number = $request->ap_number;
        $dpo->phone_number = $request->phone_number;
        if($request->password!=null){
            $dpo->password = Hash::make($request->password);
        }
        $dpo->save();      
       return redirect()->route('admin.view')->with('error','Admin Record Updated Successfully');
    }// End of update_dpo Method
    

}
