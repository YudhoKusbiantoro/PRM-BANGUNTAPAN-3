<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengurus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'image_path',
        'order',
        'division_id',
        'level'
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
