<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'name' => 'required',
            'comment_text' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يجب كتابة اسمك !',
            'comment_text.required' => 'يجب إضافة تعليقك !',
        ];
    }
}
