<?php

namespace Lianmaymesi\LaraInstaller\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstallDatabaseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'db_host' => 'required',
            'db_port' => 'required|numeric',
            'db_name' => 'required',
            'db_user' => 'required',
            'db_pass' => 'required|min:3',
        ];
    }
}
