<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDomainRequest extends FormRequest
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
        $domainId = $this->route('domain'); // Zakładając, że parametr w routingu nazywa się 'domain'

        return [
            'name' => [
                'required',
                Rule::unique('domains')->ignore($domainId),
            ],
            'site_url' => 'nullable',
            'host' => 'nullable',
            'host_url' => 'nullable',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ];
    }
}
