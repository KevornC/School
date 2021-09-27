<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentorder extends Model
{
    use HasFactory;

    protected $fillable = [
      'Name',
      'Starch',
      'Meat',
      'Vegetable',
      'Beverages',
      'Date'
    ];
}
