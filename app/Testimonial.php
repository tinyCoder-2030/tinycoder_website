<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
class Testimonial extends Model implements HasMedia
{
  use HasMediaTrait;
  protected $guarded = [];
  public function image(){
    if($this->media->first()){
      return $this->media->first()->getFullUrl();
    }
   return null;
  }
}
