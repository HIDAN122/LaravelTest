<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function accounts()
    {
        $this->belongsTo('App\Models\Account','account_id','id');
    }

    protected $fillable
        = [
            'sum',
            'description',
            'account_id',

        ];
}
