<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Everlisttype extends Model
{
    use DateableTrait;

    protected $fillable = ['everlisttype'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function everlistmasters()
    {
        return $this->hasMany(Everlistmaster::class);
    }

    public function getUrlAttribute()
    {
        return route('everlisttye.show', $this->id);
    }

    public function getEverlistTypeNameAttribute()
    {
        return $this->everlisttype;
    }
}
