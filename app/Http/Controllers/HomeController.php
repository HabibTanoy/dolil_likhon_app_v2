<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $total_saved = Record::count();
        $total_this_month = Record::where('created_at', '>=', Carbon::now()->startOfMonth()->toDateString())
            ->where('created_at', '<=', Carbon::now()->endOfMonth()->toDateString())
            ->count();
        return view('dashboard', compact('total_saved', 'total_this_month'));
    }
}
