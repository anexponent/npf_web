<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Carbon;


class NewsController extends Controller
{
    //
    public function AllNews(){
    
        $newspos1 = News::latest()->paginate(10);
        return view('backend.information.NewsPost.all_news', compact('newspos1'));
        }//end method
        
        public function AddNews(){
        $NewCat =Category::orderBy('news_category','ASC')->get();
        
        return view('backend.information.NewsPost.add_news', compact('NewCat'));
        }//end method
        
        
        public function StoreNews(Request $request){
        
        $request->validate([
                'news_category_id' => 'required',
                'news_title' => 'required',
                
    
            ],[
    
                'news_category_id.required' => 'News Category Name is Required',
                'news_title.required' => 'News Title  is Required',
            ]);
    
            $image = $request->file('news_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
    
                Image::make($image)->resize(600,400)->save('upload/newsImages/'.$name_gen);
                $save_url = 'upload/newsImages/'.$name_gen;
    
                News::insert([
                    'news_category_id' => $request->news_category_id,
                    'news_title' => $request->news_title,
                    'news_content' => $request->news_content,
                    'news_number' => $request->news_number,
                    'news_image' => $save_url,
                    'created_at' => Carbon::now(),
    
                ]); 
                $notification = array(
                'message' => 'News Posted Inserted Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.news')->with($notification);
    
        }// End Method
    
    
    
        public function EditNews($id){
    
        $newspos = News::findOrFail($id);
        $NewCat =Category::orderBy('news_category','ASC')->get();
            return view('backend.information.NewsPost.news_edit',compact('newspos','NewCat'));
        }// End Method
    
    
       public function UpdateNews(Request $request){
    
            $news_id = $request->id;
    
            if ($request->file('news_image')) {
                $image = $request->file('news_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
    
                Image::make($image)->resize(600,400)->save('upload/newsImages/'.$name_gen);
                $save_url = 'upload/newsImages/'.$name_gen;
    
                News::findOrFail($news_id)->update([
                    'news_category_id' => $request->news_category_id,
                    'news_title' => $request->news_title,
                    'news_content' => $request->news_content,
                    'news_number' => $request->news_number,
                    'news_image' => $save_url,
    
                ]); 
                $notification = array(
                'message' => 'News Updated with Image Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.news')->with($notification);
    
            } else{
    
                News::findOrFail($news_id)->update([
                    'news_category_id' => $request->news_category_id,
                    'news_title' => $request->news_title,
                    'news_content' => $request->news_content,
                    'news_number' => $request->news_number,
                    
                   
                     
    
                ]); 
                $notification = array(
                'message' => 'News Updated without Image Successfully', 
                'alert-type' => 'success'
            );
    
           return redirect()->route('all.news')->with($notification);
    
            } // end Else 
    
        
        }//end method
        
        public function DeleteNews($id){
        
        
        $newspos = News::findOrFail($id);
        $img = $newspos->news_image;
        unlink($img);
        
        News::findOrFail($id)->delete();
        
             $notification = array(
            'message' => 'News Deleted Successfully',
            'alert-type'=>'success'
            );
       
    
            return redirect()->back()->with($notification);
        
        
        }// end method
        
        
        public function DetailNews($id){
        
        
        $NewCat =Category::orderBy('news_category','ASC')->get();
        
        $allnews = News::latest()->limit(5)->get();
        
        $newpos =News::findOrFail($id);
        
        return view('frontend.home.News_all.news_details', compact('newpos', 'allnews', 'NewCat'));
        
        
        }
        
        public function CategoryPost($id){
        
        
        $CatNewsPost = News::where('news_category_id', $id)->orderBy('id','DESC')->paginate(4); // for categorising news
        $allnews = News::latest()->limit(5)->get();
        $NewCat =Category::orderBy('news_category','ASC')->get();
        $categoryName = Category::findOrFail($id);
        $news_count = News::all()->count(); 
        $news_category = Category::all(); 
        
        return view('frontend.home.News_all.cat_news', compact('CatNewsPost','allnews','NewCat','categoryName','news_count','news_category'));
        
        
        }
        
        public function HomeNews(){

        $NewCat =Category::orderBy('news_category','ASC')->get();
        $allNews =News::latest()->paginate(4);
        $allnews = News::latest()->limit(5)->get();


        return view('frontend.home.News_all.newsAll', compact('allNews','NewCat','allnews'));

        }
    
        public function SearchNews( Request $request){
            
                $search_text = $request->search_name;
              
                $newpos=news::where('news_title', 'LIKE', '%'.$search_text.'%')
                ->orWhere('news_category_id', 'LIKE', '%'.$search_text.'%')->paginate(10);
               
                
                return view('backend.information.NewsPost.search', compact('newpos'));
       
        
        
        }//end of search method
    
}