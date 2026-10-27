<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FormController extends Controller 
{
    public function create()
    {
        return view("form");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:150'],
            'consent' => ['accepted']
        ]);

        $data['created_at'] = now()->toDateTimeString();

        $randomNum = mt_rand(100000, 999999);

        $file_name = 'form_' . now()->format('Y_m_d_H_i_s') . '_' . $randomNum . '.json';

        $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        $directory = storage_path('app/forms');

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        if(file_put_contents($directory . '/' . $file_name, $jsonData) !== false)
        {
            return redirect("form/success");
        }
    }
}