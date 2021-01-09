<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['productName','productLine','description','quantity','price','img'];

    public function Orderdetail()
    {
        return $this->hasMany(Orderdetail::class,'productCode');
    }

    public function ProductLine()
    {
        return $this->belongsTo(ProductLine::class,'productLine');
    }

    public function usesTimestamps():bool
    {
        return false;
    }
}
