<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ribo extends Model
{
    #Mass Assginment for columns value
    protected $fillable = ['name','skill','bio','status'];
    protected $guarded = ['id'];

    public function scopeSorted($query)
    {
        return $query->orderBy('name', 'asc');
    }

    /** @use HasFactory<\Database\Factories\RiboFactory> */
    use HasFactory;
}