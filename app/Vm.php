<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vm extends Model
{
    protected $table='vm';

    protected $fillable=[
        'title',
        'body',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
   
}
