<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class JsonController extends Controller
{
    //

    public function index(Request $request)
    {
        $data = json_encode(['Example 1','Example 2','Example 3',]);

        $fileName = time() . '_datefile.json';
        $fileStorePath = public_path('/upload/json/'.$fileName);

        File::put($fileStorePath,$data);

        return response()->download($fileStorePath);
    }
}
