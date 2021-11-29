<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    use HasFactory,Sluggable;
    protected $guarded=['id'];
    protected $with=['author','category'];
    public function scopeFilter($query, array $filters){
        // when adalah pengganti if dan ?? adalah pengganti isset
        //filter untuk search all post
        $query->when($filters['search'] ?? false ,function($query,$search){
            return $query->where(function($query) use ($search) {
           return $query->where('title', 'like', '%' .$search . '%')
            ->orWhere('body', 'like', '%' .$search . '%');
            });
        });
        //filter untuk search category
        $query->when($filters['category'] ?? false, function($query,$category){
            return $query->whereHas('category',function($query) use($category)//use disini digunakan supaya $category diatas bisa digunakan
            {
                return $query->where('slug',$category);
            });
        });
        //filter search by author
        $query->when($filters['author'] ?? false, function($query,$author){
            return $query->whereHas('author',function($query) use($author)//use disini digunakan supaya $author diatas bisa digunakan
            {
                return $query->where('username',$author);
            });
        });
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
    return $this->belongsTo(User::class,'user_id'/*ini alias(nama pengganti biar bisa dicek di table database*/ );
    }
    public function getRouteKeyName(){
        return 'slug';
   }

   //buat slug otomatis
   public function sluggable(): array
   {
       return [
           'slug' => [
               'source' => 'title'
           ]
       ];
   }
}
