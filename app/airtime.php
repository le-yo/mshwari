<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class airtime extends Model
{
    //
    protected $table = 'airtime';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['phone', 'amount'];

}
