<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'order'];

    public function penguruses()
    {
        return $this->hasMany(Pengurus::class)->orderBy('level');
    }
}
