<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        "id",
        "name",
        "image",
        "description",
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
