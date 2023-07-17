<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('index');
    }
  
    public function create()
    {
        return view('generator');
    }

    public function generate(Request $request)
    {
        $link = $request->input('link');
        $qrCode = QrCode::format('png')->size(300)->generate($link);
        $imageData = 'data:image/png;base64,' . base64_encode($qrCode);

        return view('generator')->with('imageData', $imageData);
    }
}
