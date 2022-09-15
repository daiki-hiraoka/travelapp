<?php

namespace App\Http\Controllers;

// modelのPlanをuseで宣言する
use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(Plan $plan) {
        return view('plans/index')->with(['plans' => $plan->getPaginateByLimit()]);
    }
    
    /**
     * 特定のIDのplanを表示する
     * 
     * @params Object Plan
     * @return Response plan view
     */
    public function show(Plan $plan) {
        return view('plans/show')->with(['plan' => $plan]);
    }
}
