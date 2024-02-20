<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title'         => 'required|min:5|max:40',
            'description'   => 'required|max:1000',
            'thumb'         => 'min:10',
            'price'         => 'required|max:10',
            'series'        => 'required|min:5|max:30',
            'sales_date'     => 'required',
            'type'          => 'required|min:5|max:20',
        ];
    }

    public function messages()
    {
        return [
            'title.required'         => 'Inserimento del titolo obbligatiorio',
            'title.min'              => 'I caratteri del titolo devono essere almeno 5',
            'title.max'              => 'I caratteri del titolo devono essere meno di 40',
            'description.required'   => 'Inserimento della descrizione obbligatiorio',
            'description.max'        => 'I caratteri della descrizione devono essere meno di 1000',
            'thumb.min'              => 'I caratteri dell\' immagine devono essere almeno 10',
            'price.required'         => 'Inserimento del prezzo obbligatorio',
            'price.max'              => 'I caratteri del prezzo devono essere meno di 10',
            'series.required'        => 'Inserimento della serie obbligatorio',
            'series.min'             => 'I caratteri della serie devono essere almeno 5',
            'series.max'             => 'I caratteri della serie devono essere meno di 30',
            'sales_date.required'     => 'Inserimento della data obbligatorio',
            'type.required'          => 'Inserimento del tipo obbligatorio',
            'type.min'               => 'I caratteri del tipo devono essere meno di 5',
            'type.max'               => 'I caratteri del tipo devono essere almeno 20',
        ];
    }
}
