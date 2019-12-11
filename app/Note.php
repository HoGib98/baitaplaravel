<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    protected $fillable = ['address', 'age', 'leve', 'user_id'];

    // user
    public function user()
    {
    	 return $this->belongsTo('App\User', 'user_id');
    }
}
