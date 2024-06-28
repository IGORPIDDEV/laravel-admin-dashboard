<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PaymentController extends Controller
{
    /**
     * Display the payments list.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Payments', [
            'payments' => [],
            'status' => session('status'),
        ]);
    }
}
