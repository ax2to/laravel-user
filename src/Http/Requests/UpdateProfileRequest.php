<?php

namespace Ax2to\LaravelUser\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UpdateProfileRequest extends Request
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
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'username' => 'required|max:32',
            'email' => 'required|email|max:255|unique:users,id,' . Auth::user()->id,
        ];
    }
}
