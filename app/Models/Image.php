<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'path_large', 'path_miniature', 'event_id', 'created_at', 'updated_at'];
    public $incrementing = false;

    public  function event(){
        return $this->belongsTo(Event::class);
    }
}
