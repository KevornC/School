<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mealtype extends Model
{
    use HasFactory;

    protected $fillable = [
      'mealtype','category_ID'
    ];

    public function mealcategories(){
      return $this->belongsTo(mealcategory::class,'category_ID');
    }
}
