<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Services\AnalysisService;
use App\Services\DecileService;

class AnalysisController extends Controller
{
    public function index(Request $request)
    {
        $subQuery = Order::betweenDate($request->startDate, $request->endDate);

        if($request->type === 'perDay'){
           list($data, $labels, $totals) = AnalysisService::perDay($subQuery);
        }

        if($request->type === 'perMonth'){
            list($data, $labels, $totals) = AnalysisService::perMonth($subQuery);
         }

         if($request->type === 'perYear'){
            list($data, $labels, $totals) = AnalysisService::perYear($subQuery);
         }

         if($request->type === 'decile'){
            list($data, $labels, $totals) = DecileService::decile($subQuery);
         }
        return response()->json([
            'data' => $data,
            'type' => $request->type,
            'labels' => $labels,
            'totals' => $totals,
        ], Response::HTTP_OK);
    
    }
}
