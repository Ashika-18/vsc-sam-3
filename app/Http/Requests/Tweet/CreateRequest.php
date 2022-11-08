<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "tweet" => "required|max:140"
        ];
    }

    public function message() {
        return [
            "required" => ":attributeを入力して下さい!",
            "max"      => ":attributeは:max文字以内で入力して下さい!",
        ];
    }

    public function attributes() {
        return [
            "tweet" => "ツイート",
        ];
    }

    public function tweet(): string {
        return $this->input("tweet");
    }
}
