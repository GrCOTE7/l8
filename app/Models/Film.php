<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'year', 'description'];
    protected $hidden = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function categories()
    {
        return $this->morphedByMany(Category::class, 'filmable');
    }

    public function actors()
    {
        return $this->morphedByMany(Actor::class, 'filmable');
    }
}
