<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWorkshop extends Model
{
    protected $guarded = [];
    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
