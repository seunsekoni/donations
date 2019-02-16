<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    // Show price of product in a thousands
    public function showPrice()
    {
        return number_format($this->amount/100, 2);
    }
}
