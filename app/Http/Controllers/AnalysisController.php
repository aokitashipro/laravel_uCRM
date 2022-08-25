<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class AnalysisController extends Controller
{
    public function index()
    {
        $startDate = '2022-08-01';
        $endDate = '2022-08-31';

        // $period = Order::betweenDate($startDate, $endDate)
        // ->groupBy('id')
        // ->selectRaw('id, sum(subtotal) as total, 
        // customer_name, status, created_at')
        // ->orderBy('created_at')
        // ->paginate(50);

        // dd($period);

        $subQuery = Order::betweenDate($startDate, $endDate)
        ->where('status', true)
        ->groupBy('id')
        ->selectRaw('id, sum(subtotal) as totalPerPurchase, 
        DATE_FORMAT(created_at, "%Y%m%d") as date');

        $data = DB::table($subQuery)
        ->groupBy('date')
        ->selectRaw('date, sum(totalPerPurchase) as total' )
        ->get();

        // dd($data);


        return Inertia::render('Analysis');
    }
}
