<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'header' => 'nullable|string',
            'actors' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|string',
            'video' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'tag' => 'nullable|array',
            'likes' => 'nullable|array',
            'is_published' => 'nullable|boolean',
        ];
    }
}
