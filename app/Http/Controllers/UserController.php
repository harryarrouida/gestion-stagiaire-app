<?php

namespace App\Http\Controllers;

use App\Models\Bac;
use App\Models\Filliere;
use App\Models\Stagiaire;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function inscriptionView()
    {
        $filliers = Filliere::all();
        return view("stagiaire.inscription", compact("filliers"));
    }

    public function loginView()
    {
        return view("stagiaire.login");
    }

    public function logout()
    {
        auth()->guard('stagiaire')->logout();
        return redirect()->route("stagiaire.login.v");

    }

    public function inscription(Request $request)
    {

        $user = Stagiaire::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'cin' => $request->cin,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'filliere_id' => $request->filliere_id
        ]);
        if ($user) {
            auth()->guard('stagiaire')->login($user);
            return redirect()->route('stagiaire.upload.v');
            // return to_route('');
            // php artisan make:model User -a 
            // Route::redirect('/profile', '/login')
            // $loop->index
            // count($item)
            // return Redirect::away('facebook')
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->guard('stagiaire')->attempt($credentials)) {
            return redirect()->route('stagiaire.check.v');
        }
    }

    public function checkView()
    {
        $user = auth()->user();
        return view('stagiaire.check_status', compact('user'));
    }

    public function bacUploadView()
    {
        return view("stagiaire.bac_upload");
    }

    public function bacUpload(Request $request)
    {
        $request->validate(['bac' => 'required|image']);
        if ($request->hasFile('bac')) {
            $path = $request->file('bac')->store('public/bacs');
            if ($path) {
                Bac::create(['stagiaire_id' => auth()->guard('stagiaire')->user()->id, 'path' => $path]);
                return redirect()->route('stagiaire.check.v');
            } else {
                return back();
            }
        }
    }
}
