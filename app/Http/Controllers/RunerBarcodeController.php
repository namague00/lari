<?php

namespace App\Http\Controllers;

use App\Models\Runer;
use Illuminate\Http\Request;

class RunerBarcodeController extends Controller
{
    public function show($id)
    {
        $runer = Runer::findOrFail($id);
        return view('runer.barcode', compact('runer'));
    }
}
