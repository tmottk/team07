<?php

namespace App\Http\CreateDemoRequest;

use Illuminate\Foundation\Http\FormRequest;

class CreateDemoRequest extends FormRequest
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
           
            'year' => 'required|numeric|min:0|max:20',
            'project' =>'required|string|min:0|max:2000',
            'total_volunteers' => 'required|string|min:0|max:2000',
            'male_volunteers' => 'required|string|min:0|max:2000',
            'female_volunteers' => 'required|string|min:0|max:2000',
        ];
    }



    public function messages()
    {
        return [
        "year.required" => "年份 為必填"
        "year.min" => "年份 為必填"
        "project.required" => "項目 為必填"
        "project.min" => "項目 為必填"
        "total_volunteers.required" => "總人數	為必填"
        "total_volunteers.min" => "總人數 為必填"
        "male_volunteers.required" => "男性人數	為必填"
        "male_volunteer.min" => "男性人數 為必填"
        "female_volunteers.required" => "女性人數 為必填"
        "female_volunteers" => "女性人數 為必填"
        ];

    }
}
