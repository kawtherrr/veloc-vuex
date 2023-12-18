<?php

namespace App\Models;

use App\Models\Agency;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model implements HasMedia
{
    use InteractsWithMedia; use HasFactory;

    protected $guarded = [];

    public function agency(){
        return $this->belongsTo(Agency::class);
      }
}

