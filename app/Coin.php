<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable = ['name', 'key', 'img'];

    public function histories()
    {
        return $this->hasMany(History::class)->orderByDesc("created_at");
    }

    public function getPriceAttribute()
    {
        return $this->current->price ?? 0;
    }

    public function current()
    {
        return $this->hasOne(History::class)->latest();
    }

}
