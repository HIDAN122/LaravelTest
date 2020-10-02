<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function users()
    {
        $this->belongsTo('App\Models\User','account_id','id');
    }

    public function transactions()
    {
        $this->hasMany('App\Models\Transaction');
    }

    protected $fillable
        = [
            'name',
            'balance',
            'user_id',
            'deleted_at',
            'en_name'
        ];
}
