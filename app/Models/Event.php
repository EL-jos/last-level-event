<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $fillable = ['id', 'title', 'price', 'date', 'time', 'duration', 'location', 'organiser_id', 'description', 'created_at', 'updated_at', 'deleted_at'];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function organiser(){
        return $this->belongsTo(Organiser::class);
    }

    public  function image(){
        return $this->hasOne(Image::class);
    }
    public function prices(){
        return $this->belongsToMany(Price::class);
    }

    public function sales(){
        return $this->hasMany(Sale::class);
    }
}
