<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;


class CategoryController extends Controller
{
    //

    public function NewsCategory(){
    
        $newcat = Category::latest()->get();
        
       return view('backend.information.news_category.news_cate_all', compact('newcat'));
        
        }//end method
        
        public function AddNewsCategory(){
        
        
        return view('backend.information.news_category.news_cate_add');
        }//end method
        
        
        public function StoreNewsCategory(Request $request){
        
        $request->validate([
        'categoryName'=>'required'
        
        ],
        [
        'categoryName.required' =>'News Category is required',
        ]);
        
        Category::insert([
        'news_category' => $request->categoryName,
        //'ceated_at' => carbon::now,
        ]);
        
             $notification = array(
            'message' => 'News Category Inserted Successfully',
            'alert-type'=>'success'
            );
       
    
            return redirect()->route('news.category')->with($notification);
        }
        
        public function EditNewsCategory($id){
        
        
        $newscat = Category::findOrFail($id);
        
        return view('backend.information.news_category.edit_newsCategory', compact('newscat'));
        
        }//end method
        
        public function UpdateNewsCategory(Request $request, $id){
        
        Category::findOrFail($id)->update([
        'news_category' => $request->news_category,
        //'ceated_at' => carbon::now,
        ]);
        
             $notification = array(
            'message' => 'News Category Updated Successfully',
            'alert-type'=>'success'
            );
       
    
            return redirect()->route('news.category')->with($notification);
        
        }// end method
        
        public function DeleteNewsCategory($id){
        
            Category::findOrFail($id)->delete();
        
             $notification = array(
            'message' => 'News Category Deleted Successfully',
            'alert-type'=>'success'
            );
       
    
            return redirect()->route('news.category')->with($notification);
        
        }
        
}