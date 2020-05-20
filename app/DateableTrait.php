<?php
namespace App;

trait DateableTrait 
{
    
    public function getCreatedDateAttribute()
    {
        return $this->created_at->format("d/m/Y");
    }

    public function getUpdatedDateAttribute()
    {
        return $this->updated_at->format("d/m/Y");
    }
}