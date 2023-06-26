<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organiser extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;
    protected $fillable = ['id', 'name', 'email', 'phone', 'address', 'created_at', 'updated_at', 'deleted_at'];
}
