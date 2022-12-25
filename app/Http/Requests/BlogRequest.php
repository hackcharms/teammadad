<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title'=>'required|string|max:255|min:20|string',
            'body'=>'required|string|max:65535|min:40',
            'image'=>'max:2048|file|image|mimes:jpeg,bmp,png,gif,jpe,jpg'
        ];
    }
    public function messages()
    {
        return[
            'image.mimes'=>'Allowable image formats are jpeg,bmp,png,gif,jpe,jpg. If your file is in any other format try to convert it.',
            'image.max'=>'Maximum file size to upload is 2MB (2048 KB). If you are uploading a photo, try to reduce its resolution to make it under 2MB'
        ];
    }
}
