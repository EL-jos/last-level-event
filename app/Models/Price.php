<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['id', 'type_id', 'amount', 'created_at', 'updated_at', 'deleted_at'];

    public $incrementing = false;

    public function events(){
        return $this->belongsToMany(Event::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
