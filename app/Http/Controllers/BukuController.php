<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index0220()
    {
       $data = Buku::get();
       return view('index0220',compact('data'));
    }
}
