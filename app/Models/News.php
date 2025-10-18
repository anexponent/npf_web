<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    use HasFactory;
    protected $guarded = [];
    
    //this function links the relationship of NewsCategory table and NewsPost table
    public function NewsCategories(){
    
    return $this->belongsTo(Category::class, 'news_category_id', 'id');
    
    }
    //Category count Method
    public static function CategoryCount($cat_id){
    $catCount = News::where('news_category_id', $cat_id)->count();
    return $catCount;
    }
}