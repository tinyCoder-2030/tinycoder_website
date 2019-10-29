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
        'name', 'from_time', 'to_date','detail','from_age','to_age','from_date','girle','boy'
    ];
}
