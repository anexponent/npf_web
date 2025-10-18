<?php

namespace App\Http\Controllers\Information;


use App\Http\Controllers\Controller;
use App\Models\Wanted;

use App\Models\Missing;
use App\Models\Category;
use App\Models\News;

use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use Image;


class WantedPController extends Controller
{


    public function AllWanted(){

        $wanted_person = Wanted::paginate(10);
        return view('backend.information.OurService.all_wantedpage', compact('wanted_person'));
        }//end method

        public function AddWanted(){
        $wanted_person =Wanted::orderBy('first_name','ASC')->get();


        //$wanted_person->image=$request->wanted_image;


        return view('backend.information.OurService.add_wantedpage', compact('wanted_person'));
        }//end method


        public function StoreWanted(Request $request){


            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(400,450)->save('upload/wanted/'.$name_gen);
            $save_url = 'upload/wanted/'.$name_gen;


            Wanted::insert([
        'first_name'=>$request->firstName,
        'last_name'=>$request->lastName,
        'other_names'=>$request->otherNames,
        'dob'=>$request->dateBirth,
        'height'=>$request->height,
        'nationality'=>$request->nationality,
        'address'=>$request->address,
        'phone'=>$request->phoneNo,
        'lanquages_spoken'=>$request->languageSpoken,
        'hair_color'=>$request->hairColor,
        'complexion_color'=>$request->complexonColor,
        'eye_color'=>$request->eyeColor,
        'other_body_descriptions'=>$request->otherBodyDes,
        'crime_committed'=>$request->crimeCommitted,
        'image' => $save_url,
        'created_at'=>Carbon::now(),

    ]);


    $notification = array(
        'message' => 'News Posted Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);



        }// End Method


        public function WantedDetail($id){


            $NewCat =Category::orderBy('news_category','ASC')->get();

            $allnews = News::latest()->limit(5)->get();

            $wanted_detail =Wanted::findOrFail($id);

            return view('frontend.home.OurServices.wanted_details', compact('wanted_detail', 'allnews', 'NewCat'));


            }

            public function EditWanted($id){

                $editWanted = Wanted::findOrFail($id);
                //$NewCat =Category::orderBy('news_category','ASC')->get();
                    return view('backend.information.OurService.wanted_edit',compact('editWanted'));
                }// End Method


               public function UpdateWanted(Request $request){

                    $wanted_id = $request->id;

                    if ($request->file('image')) {
                        $image = $request->file('image');
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

                        Image::make($image)->resize(400,450)->save('upload/wanted/'.$name_gen);
                        $save_url = 'upload/wanted/'.$name_gen;

                        Wanted::findOrFail($wanted_id)->update([
                            'first_name' => $request->first_name,
                            'last_name' => $request->last_name,
                            'address' => $request->address,
                            'image' => $save_url,

                        ]);
                        $notification = array(
                        'message' => 'News Updated with Image Successfully',
                        'alert-type' => 'success'
                    );

                    return redirect()->route('all.wanted')->with($notification);

                    } else{

                        Wanted::findOrFail($wanted_id)->update([
                            'first_name' => $request->first_name,
                            'last_name' => $request->last_name,
                            'address' => $request->address,




                        ]);
                        $notification = array(
                        'message' => 'News Updated without Image Successfully',
                        'alert-type' => 'success'
                    );

                   return redirect()->route('all.wanted')->with($notification);

                    } // end Else


                }//end method

                public function DeleteWanted($id){


                $deleteWanted = Wanted::findOrFail($id);
                $img = $deleteWanted->image;
                unlink($img);

                Wanted::findOrFail($id)->delete();

                     $notification = array(
                    'message' => 'News Deleted Successfully',
                    'alert-type'=>'success'
                    );


                    return redirect()->back()->with($notification);


                }// end method

                public function SearchWanted( Request $request){

                    $search_text = $request->search_name;

                    $searchWanted=Wanted::where('first_name', 'LIKE', '%'.$search_text.'%')
                    ->orWhere('last_name', 'LIKE', '%'.$search_text.'%')->paginate(10);


                    return view('backend.information.OurService.search', compact('searchWanted'));



            }//end of search method


        public function AllMissing(){

            $missing_person = Missing::paginate(10);
            return view('backend.information.OurService.all_missing_persons', compact('missing_person'));
            }//end method

            public function AddMissing(){
            $missing_person =Missing::orderBy('first_name','ASC')->get();



            //$wanted_person->image=$request->wanted_image;

            return view('backend.information.OurService.add_missing', compact('missing_person'));
            }//end method


            public function StoreMissing(Request $request){

                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

                Image::make($image)->resize(400,450)->save('upload/missing/'.$name_gen);
                $save_url = 'upload/missing/'.$name_gen;


            Missing::insert([
            'first_name'=>$request->firstName,
            'last_name'=>$request->lastName,
            'other_names'=>$request->otherNames,
            'gender'=>$request->gender,
            'dob'=>$request->dateBirth,
            'state'=>$request->state,
            'lga'=>$request->lga,
            'height'=>$request->height,
            'nationality'=>$request->nationality,
            'address'=>$request->address,
            'location_disappearance'=>$request->locationLastSeen,
            'phone'=>$request->phoneNo,
            'lanquages_spoken'=>$request->languageSpoken,
            'hair_color'=>$request->hairColor,
            'complexion_color'=>$request->complexonColor,
            'eye_color'=>$request->eyeColor,
            'other_body_descriptions'=>$request->otherBodyDes,
            'image' => $save_url,
            'created_at'=>Carbon::now(),

        ]);


        $notification = array(
            'message' => 'News Posted Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);



            }// End Method





//
public function EditMissing($id){

    $editMissing = Missing::findOrFail($id);
    //$NewCat =Category::orderBy('news_category','ASC')->get();
        return view('backend.information.OurService.missing_edit',compact('editMissing'));
    }// End Method


   public function UpdateMissing(Request $request){

        $missing_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(400,450)->save('upload/missing/'.$name_gen);
            $save_url = 'upload/missing/'.$name_gen;

            Missing::findOrFail($missing_id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'image' => $save_url,

            ]);
            $notification = array(
            'message' => 'News Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.missing')->with($notification);

        } else{

            Missing::findOrFail($missing_id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,




            ]);
            $notification = array(
            'message' => 'News Updated without Image Successfully',
            'alert-type' => 'success'
        );

       return redirect()->route('all.missing')->with($notification);

        } // end Else


    }//end method

    public function DeleteMissing($id){


    $deleteMissing = Missing::findOrFail($id);
    $img = $deleteMissing->image;
    unlink($img);

    Missing::findOrFail($id)->delete();

         $notification = array(
        'message' => 'Missing Deleted Successfully',
        'alert-type'=>'success'
        );


        return redirect()->back()->with($notification);


    }// end method

    public function SearchMissing( Request $request){

        $search_text = $request->search_name;

        $searchMissing=Missing::where('first_name', 'LIKE', '%'.$search_text.'%')
        ->orWhere('last_name', 'LIKE', '%'.$search_text.'%')->paginate(10);


        return view('backend.information.OurService.searchMissing', compact('searchMissing'));



        }//end of search method


    public function MissingDetail($id){


                $NewCat =Category::orderBy('news_category','ASC')->get();

                $allnews = News::latest()->limit(5)->get();

                $missing_detail =Missing::findOrFail($id);

                return view('frontend.home.OurServices.missing_details', compact('missing_detail', 'allnews', 'NewCat'));


                }
                
                public function ViewAllWanted(){
                    $NewCat =Category::orderBy('news_category','ASC')->get();
                    $allWanted =Wanted::latest()->paginate(4);
                    $allnews = News::latest()->limit(5)->get();

                    return view('frontend.home.OurServices.wantedAll', compact('allWanted','NewCat','allnews'));

                    }

                    public function ViewAllMissed(){
                        $NewCat =Category::orderBy('news_category','ASC')->get();
                        $allMissed =Missing::latest()->paginate(4);
                        $allnews = News::latest()->limit(5)->get();


                        return view('frontend.home.OurServices.missedAll', compact('allMissed','NewCat','allnews'));

                        }


}