<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    public function jobs()
    {
        return $this->BelongsToMany(Job::class);
    }

    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
}
