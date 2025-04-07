<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Postagem extends Model
{
    protected $table = 'postagens';


    public function categoria(): HasOne
    {
        return $this->hasOne(categoria::class, 'id', 'categoria_id');
    }
}

