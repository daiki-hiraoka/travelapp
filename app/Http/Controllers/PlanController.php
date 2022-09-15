<?php

namespace App\Http\Controllers;

// modelのPlanをuseで宣言する
use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(Plan $plan) {
        return $plan->get();
    }
}


