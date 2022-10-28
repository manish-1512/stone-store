<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = ['name', 'parent_id', 'hindi_name','order','banner','short_description','description','slug']; 

    function getParentIdAttribute($value){
        return ($value == null)? 'No Parent category': $value;
    }
}
