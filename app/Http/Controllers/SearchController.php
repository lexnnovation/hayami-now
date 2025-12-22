<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class SearchController extends Controller
{
    //
    public function __invoke()
    {
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'like', '%' . request('q') . '%')
            ->get();
        return view('result', ['jobs' => $jobs]);
    }
}
