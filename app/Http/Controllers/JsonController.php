<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JsonController extends Controller
{
    public function updateJson(Request $request)
    {
        $data = $request->all();
        $jsonData = [
            "realized" => $data["realized"],
            "college" => $data["college"],
            "people" => $data["people"]
        ];
        $jsonData = json_encode($jsonData);
        File::put(storage_path('achivements.json'), $jsonData);

        return redirect()->back();
    }
}
