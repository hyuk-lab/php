<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ator extends Model
{
    protected $fillable = ['name', 'idade', 'nascimento'];

    protected $table = 'atores';

    public function materias() {
        return $this->hasMany(ator::class);
    }
}
