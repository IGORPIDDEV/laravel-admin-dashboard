<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    /**
     * Display the users list.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Users', [
            'users' => [],
            'status' => session('status'),
        ]);
    }
}
