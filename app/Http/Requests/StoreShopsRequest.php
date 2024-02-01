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
            'phone' => ['nullable', 'regex:/^0[0-9]{1,4}-[0-9]{1,4}-[0-9]{3,4}$/'],
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
            'phone' => '電話番号',
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
            'name.max' => ':attributeは255文字以内で入力してください。',
            'name.string' => ':attributeは文字列で入力してください。',

            'address.required' => ':attributeを入力してください。',
            'address.max' => ':attributeは255文字以内で入力してください。',
            'address.string' => ':attributeは文字列で入力してください。',

            'phone.max' => ':attributeは255文字以内で入力してください。',
            'phone.regex' => ':attributeの形式が正しくありません。',
        ];
    }
}
