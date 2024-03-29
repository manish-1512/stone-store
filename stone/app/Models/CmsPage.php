<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsPage extends Model
{
    use HasFactory;
    protected $table = 'cms_pages';

    function getNameAttribute($value){
        return ucfirst($value);
    }
}
