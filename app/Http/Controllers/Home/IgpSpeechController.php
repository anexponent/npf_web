<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cp_Speech;
use Image;


class IgpSpeechController extends Controller
{
    //
    public function IgpPage(){
    
        $aboutpage = Cp_Speech::find(1);
        
        return view('backend.information.about_page.about_page_all', compact('aboutpage'));
        
        
        }//end about view function
    
        public function EditIgp($id){
    
            $aboutpage = Cp_Speech::find(1);
                return view('backend.information.about_page.about_edit',compact('aboutpage'));
            }// End Method
        
        
        
        public function UpdateIgp(Request $request){
        
         $aboutpost_id = $request->id;
         
         if($request->file('igp_image')){
         $image = $request->file('igp_image');
         $image2 = $request->file('igp_image');
         $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
         $name_gen2 = hexdec(uniqid()). '.'.$image2->getClientOriginalExtension();
         
         Image::make($image)->resize(400,450)->save('upload/igp_photo/'.$name_gen);
         Image::make($image2)->resize(700,700)->save('upload/igp_photo/'.$name_gen2);
         $save_url = 'upload/igp_photo/'.$name_gen;
         $save_url2 = 'upload/igp_photo/'.$name_gen2;
         Cp_Speech::findorfail($aboutpost_id)->update([
        'speech_heading' => $request->speechHeading,
         'title' => $request->title,
         'igp_speech' => $request->speechContent,
         'igp_image' => $save_url,
         'igp_image_home' => $save_url2,
         ]);
         
         $notification = array(
            'message' => 'IGP Speech with image Successfully Updated',
            'alert-type'=>'success'
            );
       
    
            return redirect()->back()->with($notification);
         
         }
         else{
         
        Cp_Speech::findorfail($aboutpost_id)->update([
        'speech_heading' => $request->speechHeading,
         'title' => $request->title,
         'igp_speech' => $request->speechContent,
         ]);
         
         $notification = array(
            'message' => 'IGP Speech Successfully Updated',
            'alert-type'=>'success'
            );
       
    
            return redirect()->back()->with($notification);
         
         
         }
        
        }//end method
        
       public function IgpHome(){
        
        $aboutpage1 = Cp_Speech::find(1);
        
        
        return view('frontend.home.igp_home', compact('aboutpage1'));
        }
        
    
}