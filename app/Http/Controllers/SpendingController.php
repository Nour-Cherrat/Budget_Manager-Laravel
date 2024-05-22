<?php

namespace App\Http\Controllers;

use App\Models\Spending;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    /**
     * List all expenses
     */
    public function index()
    {
        $spendings = Spending::all();

       return view('spending.list', ['spendings' => $spendings]);
    }
}
