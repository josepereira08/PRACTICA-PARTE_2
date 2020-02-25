<?php

namespace JP;

class Food extends Model {
    
    public function getBeverageAttribute()
    {
        return $this->attributes['beverage'] ?? false;
    }

}