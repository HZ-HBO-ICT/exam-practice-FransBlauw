<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    use HasFactory;

    public function getKazaamAttribute($value)
    {
        if($this->wombat) {
            return $this->thud * pi();
        } else {
            return $this->thud;
        }
    }
}
