<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'plan.title' => 'required|string|max:50',
            'plan.place' => 'required|string|max:30',
            'plan.people' => 'required|integer',
            'plan.spot' => 'required|string|max:50',
            'plan.cost' => 'required|integer',
            'plan.date' => 'required|integer',
            'plan.move' => 'required|string|max:100',
        ];
    }
}