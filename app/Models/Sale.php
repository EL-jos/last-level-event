<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['id', 'ref','user_id', 'event_id','quantity', 'status','type_id', 'created_at','updated_at', 'deleted_at'];
    public $incrementing = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function getPriceAttribute(){
        return $this->event->prices()->where('type_id', '=', $this->type->id)->first()->amount * $this->quantity;
    }
}
