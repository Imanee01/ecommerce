<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','price','image','promotion','favorite','category_id'];
    // ['color'=> 'bleu','rouge','vert']
    // protected $casts=['color'=>'bleu','rouge','vert'];

public function Promo($price ,$promo)
{
   $last = $price -($price * $promo/ 100);
   return $last;
}
public function category()
{
    return $this->belongsTo(Category::class);
}



}