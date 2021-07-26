<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class PagesController extends Controller
{
    public function about() {

    return view("about", [
        "title" => "About",
        "abouts" => About::all()
    ]);
    }

}
