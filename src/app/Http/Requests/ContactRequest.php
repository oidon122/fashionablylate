<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_area_code' => ['required', 'max:5'],
            'phone_exchange_code' => ['required',  'max:5'],
            'phone_subscriber_number' => ['required', 'max:5'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['nullable', 'string', 'max:255'],
            'content' => ['required'],
            'detail' => ['required', 'string', 'max:120']
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'phone_area_code.required' => '電話番号を入力してください',
            'phone_area_code.max' => '電話番号は5桁までの数字で入力してください',
            'phone_exchange_code.required' => '電話番号を入力してください',
            'phone_exchange_code.max' => '電話番号は5桁までの数字で入力してください',
            'phone_subscriber_number.required' => '電話番号を入力してください',
            'phone_subscriber_number.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'content.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
