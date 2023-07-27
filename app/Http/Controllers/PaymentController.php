<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function getCurrentUser()
    {
        $id = Auth::id();
        $user = User::find($id);
        dd($user);
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $secret_key = 'Basic ' . config('xendit.key_auth');
        $external_id = Str::random(10);

        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->post('https://api.xendit.co/v2/invoices', [
            'external_id' => $external_id,
            'amount' => 15000,
            'customer'=> [
                'given_names' => $user->name,
            ],
            'payer_email' => $user->email
        ]);

        $response = $data_request->object();

        Payment::create([
            'doc_no' => $external_id,
            'amount' => 15000,
            'description' => 'Upgrade ke akun premium',
            'payment_status' => $response->status,
            'payment_link' => $response->invoice_url
        ]);

        return redirect()->to($response->invoice_url);
    }

    public function callback()
    {
        $data = request()->all();

        $status = $data['status'];
        $external_id = $data['external_id'];
        $payer_email = $data['payer_email'];

        Payment::where('doc_no', $external_id)->update([
            'payment_status' => $status
        ]);

        // next, fix this method
        $user = User::where('email', $payer_email)->first();
        if ($user) {
            if ($data['status'] === 'PAID') {
                $user->is_premium = true;
                $user->save();
            }
        }

        // return response()->json($data);
        return view('generator')->with('premium_access', 'Selamat Akun Kamu Sudah Premium');
    }
}
