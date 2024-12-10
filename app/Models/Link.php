<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'url',
        'shortened_url',
        'visits',
        'expires_at',
        'first_visited_at',
        'last_visited_at',
    ];
}
