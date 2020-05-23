<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Everlistmaster extends Model
{
    use DateableTrait;
    protected $fillable = ['name', 'ownername', 'phno', 'address', 'everlisttype_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function everlisttype()
    {
        return $this->belongsTo(Everlisttype::class);
    }
}
