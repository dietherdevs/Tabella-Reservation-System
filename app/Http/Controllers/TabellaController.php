<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TabellaController extends Controller
{

    public function storeUser(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'first' => 'required', 
            'last' => 'required',  
            'phone' => 'required'
        ]);


        $user = User::create([
            'first_name' => $request->first,
            'last_name' => $request->last,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password), 
        ]);


        Auth::login($user);

        return redirect('/account-success');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function storeReservation(Request $request)
    {

        $userId = Auth::id();

        Reservation::create([
            'user_id' => $userId,
            'bundle' => $request->bundle,
            'guests' => $request->guests,
            'preference' => $request->preference,
            'reservation_date' => $request->date,
            'reservation_time' => $request->time,
            'payment_method' => $request->payment,
            'notes' => $request->notes ?? 'None'
        ]);

        return redirect('/account-success');
    }
}