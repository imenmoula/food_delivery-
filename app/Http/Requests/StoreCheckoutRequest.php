<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCheckoutRequest extends FormRequest
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
            
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'rue' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'status' => 'required|integer|in:0,1',
            'payed' => 'required|integer|in:0,1',
            'delivred' => 'required|integer|in:0,1',
            'netpaye' => 'required|integer',
            'livreur' => 'required|string|max:255',
            'date' => 'required|date',

        ];
    }
}
