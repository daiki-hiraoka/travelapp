<?php

namespace App\Http\Controllers;

// modelのPlanをuseで宣言する
use App\Plan;
use Illuminate\Http\Request;
use App\Http\Requests\PlanRequest;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class PlanController extends Controller
{
    
    public function index(Plan $plan, Request $request) {
        if($request->session()->has('search')) {
            $request->session()->forget('search');
        }
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
        // S3に画像を保存
        $path = Storage::disk('s3')->putFile('/', $image, 'public');
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
        $image = $request->file('image');
        
        // S3に画像を保存
        $path = Storage::disk('s3')->putFile('/', $image, 'public');
        $input += ['image' => Storage::disk('s3')->url($path)];
        
        $plan->fill($input)->save();
        return redirect('/plans/'.$plan->id);
    }
    
    public function delete(Plan $plan) {
        $plan->delete();
        return redirect('/');
    }
    
    public function search(Request $request, Plan $plan) {
        $input = $request['search'];
        if(isset($input)){
            $request->session()->put('search', $input);
        }
        return view('plans/index')->with(['plans' => $plan->getSearch($input)]);
    }
}