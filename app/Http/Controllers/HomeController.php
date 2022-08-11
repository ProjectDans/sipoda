<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedagang;
use App\Models\User;
use App\Models\Wilayah;
use App\Models\Absensi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dtAbsensi = Absensi::all();
        $dtPedagang = Pedagang::all();
        $dtWilayah = Wilayah::count();
        $dtProfile = User::count();
        $datas = Pedagang::count();
        return view('home', compact('datas', 'dtProfile', 'dtWilayah', 'dtPedagang', 'dtAbsensi'));
    }
}
