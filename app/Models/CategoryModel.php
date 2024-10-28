<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table='category';

    protected $fillable=[
      'image',
      'name',
      'description',
      'is_active',


    ];
    use HasFactory;
}
