<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{

    public function show(): \Inertia\Response|\Inertia\ResponseFactory
    {
        return inertia('Index/Show');
    }
}
