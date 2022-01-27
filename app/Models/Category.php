<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory,Sluggable;
    protected $guarded=['id'];
    public function posts(){
        return $this->hasMany(Post::class);
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
