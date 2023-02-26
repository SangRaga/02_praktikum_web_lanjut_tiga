<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita($id){
        return "ini berita $id";
    }
}
