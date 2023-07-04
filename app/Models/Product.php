<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'code',
    	'name',
        'image',
        'category_id'
    ];

    public function category()
    {
    	return $this->belongsTo(Categoria::class, 'category_id');
    }
}
