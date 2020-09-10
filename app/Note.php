<?php

namespace App;

use Eakkawat\Cachee\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use Cacheable;

    // When update note, then update card too.
    // ['card'] is a relationship method card()
    protected $touches = ['card']; 
    
    protected $guarded = [];

    public function card(){
        return $this->belongsTo(Card::class);
    }

}