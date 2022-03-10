<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getKazaamAttribute($value)
    {
        if($this->wombat) {
            return $this->thud * pi();
        } else {
            return $this->thud;
        }
    }

    /**
     * Return the post belonging to this foo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
