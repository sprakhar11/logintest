<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class authController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {

        // dd($request->email);
        // die;

        

        
        $userdata = array(
            'email' => $request->email ,
            'password' => $request->password
        );
        
        if(Auth::attempt($userdata))
        {
            // $user = User::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'password' => Hash::make($request->password),
            // ]);
            
            // Auth::login($user);
            // var_dump('successfull login');
            return redirect('/home');
            
        } else
        {
            // var_dump(' Not a successfull login');
            return redirect('/home');


        }
        

    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // var_dump($request->name);
        // die;
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));


        Auth::login($user);

        // echo 'hi1';
        // // die;
        

        return redirect('/home');
    }

    public function isUserLoggedIn()
    {
        if(Auth::check()){
            return 'You are logged In';

        }

        return 'You are not logged';
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }


}
