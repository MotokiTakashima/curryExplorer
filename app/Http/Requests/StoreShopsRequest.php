<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'nullable', 'string', 'max:255'],
        ];
    }

    /**
     * カラム名を日本語化
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => '店舗名',
            'address' => '店舗住所',
        ];
    }

    /**
     * エラーメッセージ
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => ':attributeを入力してください。',
            'address.required' => ':attributeを入力してください。',
        ];
    }
}
