<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationRequest extends FormRequest
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
        //Return our validations
        return [
            'name' => 'required|string|min:3|max:50',
            'type'=>'required|string|min:3|max:50',
            'description'=>'required|string',
            'img_url'=>'url',
            'trip_duration'=>'required|string|min:3|max:100',
            'avg_vote'=>'required|numeric|max:5',
            'tot_person_vote'=>'required|integer',
            'price'=>'required|integer|min:0',
        ];
    }

    /**
     * Get Messagges for every rules
     * @return string,
     */
    public function messages(){
        return [
            'name.required' => 'Name is a required field',
            'name.min' => 'Name must be greater than 3 chars',
            'name.max' => 'Name must be smaller than 50 chars',

            'type.required' => 'Type is a required field',
            'type.min' => 'Type must be greater than 3 chars',
            'type.max' => 'Type must be smaller than 50 chars',

            'description.required' => 'Description is a required field',

            'img_url'=>'This is URL field ',

            'trip_duration.required' => 'Trip Duration is a required field',
            'trip_duration.min' => 'Trip Duration must be greater than 3 chars',
            'trip_duration.max' => 'Trip Duration must be smaller than 100 chars',

            'avg_vote.required' => 'Average vote is a required field',
            'avg_vote.numeric' => 'Average vote must be numeric type',
            'avg_vote.max' => 'Average vote must be equal or smaller than number 5',

            'tot_person_vote.required'=>'Total Review is the required field',
            'tot_person_vote.integer'=>'Total view must be an integer',

            'price.required'=>'Price is a required field',
            'price.integer'=>'Price must be an integre',
            'price.min'=>'Price must be greater than 0',
        ];
    }

}
