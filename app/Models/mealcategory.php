<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mealcategory extends Model
{
    use HasFactory;

    protected $fillable= [
      'Category_Name','Category_desc'
    ];

    public function mealtypes(){
      return $this->hasMany(mealtype::class,'category_ID');
    }
}
