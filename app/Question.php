<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    public function user()
    {
        return $this->belongTo(User::class);
    }

    /**
     * The mutator that take care of the slugs
     * 
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
