<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Appcontroller extends Controller
{    public function inicial() {
        return view('inicio');
     }
}
