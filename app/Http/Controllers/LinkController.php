<?php

namespace App\Http\Controllers;

use App\Models\Link;

class LinkController extends Controller
{
    public function link($link)
    {
        $link = Link::query()->where('shortened_url', $link)->first();
                
        if (!$link) {
            abort(404);
        }
        $link->first_visited_at = $link->first_visited_at ?? now();
        $link->last_visited_at = now();
        $link->increment('visits');
        $link->save();
        
        return redirect($link->url);
    }
}
