<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AmazonProduct;

class AmazonApiController extends Controller
{
    // これはいる？？
    public function search(int $id)
    {
        $response = AmazonProduct::item($id);
        return response()->json($response);
    }
}
