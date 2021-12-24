<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'priority',
        'group_id'
    ];

    public function groups()
    {
        return $this->hasMany(Groups::class , 'group_id' , 'id');

    }
}
