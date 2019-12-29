<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
class Workshop extends Model implements HasMedia
{
  use HasMediaTrait;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'from_time', 'to_date','detail','from_age','to_age','from_date','girle','boy','price'
    ];

    public function image(){
        if($this->media->first()){
          return $this->media->first()->getFullUrl();
        }
       return null;
      }


      public function workshopUsers()
      {
          return $this->hasMany(UserWorkshop::class);
      }
}
