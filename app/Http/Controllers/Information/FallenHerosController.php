<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FallenHero;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Carbon;
use Image;

class FallenHerosController extends Controller
{
    //
    public function AllFallenHero(){

        $hero_person = FallenHero::paginate(10);
        return view('backend.information.OurService.all_hero', compact('hero_person'));
        }//end method

        public function AddFallenHero(){
        $hero_person =FallenHero::orderBy('first_name','ASC')->get();


        //$wanted_person->image=$request->wanted_image;


        return view('backend.information.OurService.add_hero', compact('hero_person'));
        }//end method


        public function StoreFallenHero(Request $request){


            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(300,200)->save('upload/FallenHeros/'.$name_gen);
            $save_url = 'upload/FallenHeros/'.$name_gen;


            FallenHero::insert([
        'ap_force_number'=>$request->ApNumber,
        'rank'=>$request->Rank,
        'first_name'=>$request->firstName,
        'last_name'=>$request->lastName,
        'other_names'=>$request->otherNames,
        'command_last_served'=>$request->CommandLastServe,
        'date_occurrence'=>$request->DateOccurence,
        'date_enlistment'=>$request->DateEnlistment,
        'death_reason'=>$request->DeathReason,
        'biography'=>$request->Biography,
        'image' => $save_url,
        'created_at'=>Carbon::now(),

    ]);


    $notification = array(
        'message' => 'Fallen Hero  Posted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.hero')->with($notification);



        }// End Method


        public function FallenHeroDetail($id){


            $NewCat =Category::orderBy('news_category','ASC')->get();

            $allnews = News::latest()->limit(5)->get();

            $hero_detail =FallenHero::findOrFail($id);

            return view('frontend.home.OurServices.hero_details', compact('hero_detail', 'allnews', 'NewCat'));


            }

            public function EditHero($id){

                $editHero = FallenHero::findOrFail($id);
                //$NewCat =Category::orderBy('news_category','ASC')->get();
                    return view('backend.information.OurService.hero_edit',compact('editHero'));
                }// End Method


               public function UpdateHero(Request $request){

                    $hero_id = $request->id;

                    if ($request->file('image')) {
                        $image = $request->file('image');
                        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

                        Image::make($image)->resize(300,200)->save('upload/FallenHeros/'.$name_gen);
                        $save_url = 'upload/FallenHeros/'.$name_gen;

                        FallenHero::findOrFail($hero_id)->update([
                            'ap_force_number'=>$request->ApNumber,
                            'rank'=>$request->Rank,
                            'first_name'=>$request->firstName,
                            'last_name'=>$request->lastName,
                            'other_names'=>$request->otherNames,
                            'command_last_served'=>$request->CommandLastServe,
                            'date_occurrence'=>$request->DateOccurence,
                            'date_enlistment'=>$request->DateEnlistment,
                            'death_reason'=>$request->DeathReason,
                            'biography'=>$request->Biography,
                            'image' => $save_url,

                        ]);
                        $notification = array(
                        'message' => 'Fallen Hero Updated with Image Successfully',
                        'alert-type' => 'success'
                    );

                    return redirect()->route('all.hero')->with($notification);

                    } else{

                        FallenHero::findOrFail($hero_id)->update([
                            'ap_force_number'=>$request->ApNumber,
                            'rank'=>$request->Rank,
                            'first_name'=>$request->firstName,
                            'last_name'=>$request->lastName,
                            'other_names'=>$request->otherNames,
                            'command_last_served'=>$request->CommandLastServe,
                            'date_occurrence'=>$request->DateOccurence,
                            'date_enlistment'=>$request->DateEnlistment,
                            'death_reason'=>$request->DeathReason,
                            'biography'=>$request->Biography,




                        ]);
                        $notification = array(
                        'message' => 'Hero Updated without Image Successfully',
                        'alert-type' => 'success'
                    );

                   return redirect()->route('all.hero')->with($notification);

                    } // end Else


                }//end method

                public function DeleteHero($id){

                $deleteHero = FallenHero::findOrFail($id);
                $img = $deleteHero->image;
                unlink($img);

                FallenHero::findOrFail($id)->delete();

                     $notification = array(
                    'message' => 'News Deleted Successfully',
                    'alert-type'=>'success'
                    );


                    return redirect()->back()->with($notification);


                }// end method

                public function SearchHero( Request $request){

                    $search_text = $request->search_name;

                    $searchHero=FallenHero::where('first_name', 'LIKE', '%'.$search_text.'%')
                    ->orWhere('last_name', 'LIKE', '%'.$search_text.'%')->orWhere('ap_force_number_', 'LIKE', '%'.$search_text.'%')->paginate(10);


                    return view('backend.information.OurService.searchHero', compact('searchHero'));



            }//end of search method

            public function ViewAllHero(){
                $NewCat =Category::orderBy('news_category','ASC')->get();
                $allHero =FallenHero::latest()->paginate(4);
                $allnews = News::latest()->limit(5)->get();

                return view('frontend.home.OurServices.heroAll', compact('allHero','NewCat','allnews'));

                }


}