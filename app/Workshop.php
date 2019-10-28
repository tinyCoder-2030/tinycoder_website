<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'time', 'date','detail',
    ];
}
