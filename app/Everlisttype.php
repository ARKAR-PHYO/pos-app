<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Everlisttype extends Model
{
    // use DateableTrait;

    protected $fillable = ['everlisttypenames'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function everlistmasters()
    {
        return $this->hasMany(Everlistmaster::class);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format("d/m/Y");
    }

    public function getUpdatedDateAttribute()
    {
        return $this->updated_at->format("d/m/Y");
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
