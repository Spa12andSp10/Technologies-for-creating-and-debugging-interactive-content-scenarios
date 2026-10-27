<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class ResultsController extends Controller 
{

    public function create()
    {
        $directory = storage_path('app/forms');
        $forms = [];

        if(File::exists($directory))
            {
                $files = File::glob($directory . "/*.json");

                foreach($files as $file)
                    {
                        $content = File::get($file);
                        $data = json_decode($content, true);

                        if($data)
                            {
                                $data["filename"] = basename($file);
                                $forms[] = $data;
                            }
                    }
            }
        return view('results', compact('forms'));
    }
}