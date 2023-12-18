<?php

namespace App\Models;

use App\Models\User;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agency extends Model implements HasMedia
{
    use InteractsWithMedia; use HasFactory;

    protected $guarded = [];
    protected $table = 'agencies';

    public function user(){
        return $this->belongsTo(User::class);
      }

      public function vehicles(){
        return $this->hasMany(vehicle::class);
      }
}
