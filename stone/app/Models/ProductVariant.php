<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $table = 'product_variants';

    public  function finalItem(){

        return $this->belongsTo(FinalProductItem::class,'final_product_item_id');
    }
}
