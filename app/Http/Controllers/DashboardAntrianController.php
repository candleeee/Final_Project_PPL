<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAntrianController extends Controller
{
    public function indexPoliPencegahan()
    {
        return view('dashboard.antrian.polipencegahan');
    }

    public function indexPoliRestoratifi()
    {
        return view('dashboard.antrian.poliRestoratifi');
    }

    public function indexPoliEndodontik()
    {
        return view('dashboard.antrian.poliEndodontik');
    }

    public function indexPoliPeriodontal()
    {
        return view('dashboard.antrian.poliPeriodontal');
    }

    public function indexPoliProstodontik()
    {
        return view('dashboard.antrian.poliProstodontik');
    }

    public function indexPoliEstetikaGigi()
    {
        return view('dashboard.antrian.poliEstetikaGigi');
    }

    public function indexPoliGigiSensitif()
    {
        return view('dashboard.antrian.poliGigiSensitif');
    }
}
