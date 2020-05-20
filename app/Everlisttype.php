<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Everlisttype extends Model
{
    protected $fillable = ['everlisttype'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function everlistmaster()
    {
        return $this->belongsTo(Everlistmaster::class);
    }

    public function getUrlAttribute()
    {
        return route('everlisttye.show', $this->id);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format("d/m/Y");
    }

    public function getUpdatedDateAttribute()
    {
        return $this->updated_at->format("d/m/Y");
    }

    public function getEverlistTypeNameAttribute()
    {
        return $this->everlisttype;
    }
}
