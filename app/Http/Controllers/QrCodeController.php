<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Home'
        ]);
    }
  
    public function create()
    {
        return view('generator', [
            'title' => 'Generate QR'
        ]);
    }

    public function team()
    {
        return view('team', [
            'title' => 'Team'
        ]);
    }

    public function show_premium_page()
    {
        return view('premium', [
            'title' => 'Premium'
        ]);
    }

    public function generate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $qr_limit_per_day = 5;

        if (!$user->is_premium) {
            if ($user->qr_count >= $qr_limit_per_day) {
                $last_qr = Carbon::parse($user->last_qr_date);
                $today = Carbon::today();

                if (!$today->isSameDay($last_qr)) {
                    $user->qr_count = 0;
                    $user->last_qr_date = $today;
                    $user->save();
                } else { 
                    $quota_left = 0;
                    return redirect()->route('premium.show');
                }
            } else {
                $quota_left = $qr_limit_per_day - $user->qr_count;
            }
        }
        
        $link = $request->input('link');
        $qrCode = QrCode::format('png')->size(300)->generate($link);
        $imageData = 'data:image/png;base64,' . base64_encode($qrCode);

        $user->increment('qr_count');

        return view('generator')->with('imageData', $imageData)->with('title', 'Generate QR');
    }
}
