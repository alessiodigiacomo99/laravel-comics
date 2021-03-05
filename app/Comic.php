<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public function writers()
    {
        return $this->belongsToMany(Writer::class);
    }
    protected $fillable = ['title', 'description', 'cover', 'price', 'available'];
}
