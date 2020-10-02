<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Account extends Model
{
    use SoftDeletes;
    public function users()
    {
        $this->belongsTo('App\User','account_id','id');
    }

    public function transaction()
    {
        $this->hasMany('App\Models\Transaction');
    }

    protected $fillable
        = [
            'name',
            'balance',
            'account_id',
            'deleted_at',
        ];

}
