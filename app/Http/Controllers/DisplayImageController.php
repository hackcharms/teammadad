<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;

class DisplayImageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $path = storage_public('images/' . $filename);



        if (!File::exists($path)) {

            abort(404);

        }



        $file = File::get($path);

        $type = File::mimeType($path);
        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }
}
