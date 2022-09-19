<?php

namespace App\Http\Controllers;

// modelのPlanをuseで宣言する
use App\Plan;
use App\Http\Requests\PlanRequest;
use Illuminate\Support\Facades\Storage;

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
    
    public function create() {
        return view('plans/create');
    }

        
    public function store(PlanRequest $request, Plan $plan) {
        $input = $request['plan']; // createブレードでplan[]に入力した内容が配列として入っている
        $input += ['user_id' => $request->user()->id];
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('/', $image);
        $input += ['image' => Storage::disk('s3')->url($path)];
        $plan->fill($input)->save();
        return redirect('/plans/'.$plan->id);
    }
    
    public function edit(Plan $plan) {
        return view('plans/edit')->with(['plan' => $plan]);
    }
    
    public function update(PlanRequest $request, Plan $plan) {
        $input = $request['plan'];
        $input += ['user_id' => $request->user()->id];
        $plan->fill($input)->save();
        return redirect('/plans/'.$plan->id);
    }
    
    public function delete(Plan $plan) {
        $plan->delete();
        return redirect('/');
    }
}
