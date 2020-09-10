<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eakkawat\Cachee\Cacheable;

class Card extends Model
{
    use Cacheable;

    protected $guarded = [];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

   
}
