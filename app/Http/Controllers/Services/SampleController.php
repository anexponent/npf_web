<?php

namespace App\Http\Controllers\services;

class SampleController extends Controller
{
    
    //..........................SAMPLE PAGES BEGIS HERE ..........................................
    public function departmentsample() {
        dd('hi bro code');
        return view('frontend.sample_pages.department');
    } //end method 

    //..........................SAMPLE ENDS BEGIS HERE ..........................................
}
