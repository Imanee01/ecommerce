<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','price','image','promotion','favorite','category_id','slug','created_at','colors'];
    // ['color'=> 'bleu','rouge','vert']
    // protected $casts=[];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        // 'colors'=>'bleu','rouge','vert',
    ];

public function Promo($price ,$promo)
{
   $last = $price -($price * $promo/ 100);
   return $last;
}
public function category()
{
    return $this->belongsTo(Category::class);
}

public function comment() // un produit a plusieurs commentaire
{
    return $this->hasMany(Comment::class);
}


}