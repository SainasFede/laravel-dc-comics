<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required | max:150 | min:2',
            'description' => 'required | max:255 | min:2',
            'thumb' => 'required | max:255 | min:10',
            'price' => 'required | max:20 | min:1',
            'series' => 'required | max:100 | min:2',
            'sale_date' => 'required | date',
            'type' => 'required | max:50 | min:2',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.max' => 'Il titolo deve avere :max caratteri',
            'title.min' => 'Il titolo deve avere un :min caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve avere un :min caratteri',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'thumb.max' => 'L\'url deve essere di :max caratteri',
            'thumb.min' => 'L\'url deve essere di :min caratteri',
            'price.required' => 'Il costo è un campo obbligatorio',
            'price.max' => 'Il costo ha un :max',
            'price.min' => 'Il costo deve essere un minimo di :min',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.max' => 'La serie deve avere :max caratteri',
            'series.min' => 'La serie deve avere un :min caratteri',
            'sale_date.required' => 'La data è un campo obbligatorio e ha un formato YYYY/MM/DD',
            'type.required' => 'La tipologia è un campo obbligatorio',
            'type.max' => 'La tipologia deve avere :max caratteri',
            'type.min' => 'La tipologia deve avere un :min caratteri',
        ];
    }
}
