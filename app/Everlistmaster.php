<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Everlistmaster extends Model
{
    protected $fillable = ['name', 'address', 'phno', 'ownername'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function everlisttypes()
    {
        return $this->hasMany(Everlisttype::class);
    }

    public function getEverlistTypeNameAttribute()
    {
        return $this->everlisttype;
    }
}
