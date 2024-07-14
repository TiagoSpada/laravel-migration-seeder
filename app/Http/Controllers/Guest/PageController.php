<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = [
            'trains' => Train::where('orario_partenza', '>=', now())->orderBy('orario_partenza')->get()
        ];
        return view('welcome', $data);
    }
}
