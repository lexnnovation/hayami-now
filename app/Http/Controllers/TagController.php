<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function __invoke(Tag $tag)
    {
        //Jobs that belong to this tag
        $jobs = $tag->jobs()->get();
        return view('result', ['jobs' => $jobs]);
    }
}
