<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class filme extends Model
{
    protected $fillable = ['name', 'ator_id'];

 
    public function ator()
    {
        return $this->belongsTo(ator::class);
    }
}
