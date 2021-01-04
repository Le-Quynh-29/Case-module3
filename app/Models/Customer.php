<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','email','phone','password'];

    public function Order()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function usesTimestamps():bool
    {
        return false;
    }

}
