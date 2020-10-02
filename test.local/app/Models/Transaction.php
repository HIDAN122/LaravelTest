<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function accounts()
    {
        $this->belongsTo('App\Models\Account', 'transaction_id', 'id');
    }

    protected $fillable
        = [
            'name',
            'sum',
            'transaction_id'
        ];
}
