<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginView()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard.v');
        }
    }
    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login.v');
    }

    public function dashboardView()
    {
        $inscriptions = Inscription::all()->take(5);
        return view('admin.dashboard', compact('inscriptions'));
    }

    public function applicationsView()
    {
        return view('admin.applications');
    }

    public function stagiairesView()
    {
        return view('admin.stagiaires');
    }

}
