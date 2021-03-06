<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
class Blog extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $guarded = [];

    public function image(){
        if($this->media->first()){
          return $this->media->first()->getFullUrl();
        }
       return null;
      }

  public function user(){
    return $this->belongsTo(User::class);
  }
}
