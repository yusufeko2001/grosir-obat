<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','cash_price','credit_price','unit_id'];

    public function getPrice($type = 'cash')
    {
        // TODO: if there is no credit_price then return cash_price
        if ($type == 'credit') {
            return $this->credit_price;
        }

        return $this->cash_price;
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
