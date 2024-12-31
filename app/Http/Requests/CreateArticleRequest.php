<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
            'year' => 'required|numeric|min:0|max:113',
            'item' => 'required|string|max:255',
            'total_count' => 'required|numeric|min:0',
            'male_count' => 'required|numeric|min:0',
            'female_count' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'year.required' => '年份欄位是必填的。',
            'year.numeric' => '年份必須是數字。',
            'year.min' => '年份不能小於 0。',
            'year.max' => '年份不能大於 113。',
            'item.required' => '項目欄位是必填的。',
            'item.string' => '項目必須是字串。',
            'item.max' => '項目不能超過 255 個字元。',
            'total_count.required' => '總數欄位是必填的。',
            'total_count.numeric' => '總數必須是數字。',
            'total_count.min' => '總數不能小於 0。',
            'male_count.required' => '男性數量欄位是必填的。',
            'male_count.numeric' => '男性數量必須是數字。',
            'male_count.min' => '男性數量不能小於 0。',
            'female_count.required' => '女性數量欄位是必填的。',
            'female_count.numeric' => '女性數量必須是數字。',
            'female_count.min' => '女性數量不能小於 0。',
        ];
    }
}
