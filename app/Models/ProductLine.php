<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    use HasFactory;

    protected $fillable = ['productLine','description','img'];

    public function Product()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function usesTimestamps():bool
    {
        return false;
    }
}
