<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->default_radio,
        ]);


        event(new Registered($user));

        /*$user_id = $user->id;r
        session(['user_id' => $user_id]);
        session()->save();*/

        Auth::login($user);

        //depending on the type of user, send them to different profile creation forms
        if ($user->type === 'company')
            return redirect(RouteServiceProvider::CREATE_COMPANY);
        else
            return redirect(RouteServiceProvider::CREATE_CANDIDATE);
    }
}
