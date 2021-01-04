<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
      'orderDate','requiredDate','shippedDate','status'
    ];

    public function Customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    public function Orderdetail()
    {
        return $this->hasMany('App\Models\Orderdetail');
    }

    public function usesTimestamps():bool
    {
        return false;
    }
}
