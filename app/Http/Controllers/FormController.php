<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function submit(Request $request)
{
    logger($request->all()); // log semua data masuk

    return response()->json([
        'success' => true,
        'data' => $request->all()
    ]);
}


}
