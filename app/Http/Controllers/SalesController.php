<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use Inertia\Inertia;

class SalesController extends Controller
{
    public function index() {
        $sales = Sales::factory()->count(10)->create(); // Adjust the count as needed.
        return Inertia::render('Sales/Index', ['sales' => $sales]);
    }
}
