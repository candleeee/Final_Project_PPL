<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $poliPencegahan               = Antrian::where('poli', 'pencegahan')->where('is_call', false)->count();
        $poliRestoratifi           = Antrian::where('poli', 'restoratifi')->where('is_call', false)->count();
        $poliEndodontik            = Antrian::where('poli', 'endodontik')->where('is_call', false)->count();
        $poliPeriodontal           = Antrian::where('poli', 'periodontal')->where('is_call', false)->count();
        $poliProstodontik          = Antrian::where('poli', 'prostodontik')->where('is_call', false)->count();
        $poliEstetikaGigi          = Antrian::where('poli', 'estetikagigi')->where('is_call', false)->count();
        $poliGigiSensitif          = Antrian::where('poli', 'gigisensitif')->where('is_call', false)->count();

        return view('dashboard.index', [
            'poliPencegahan'            => $poliPencegahan,
            'poliRestoratifi'           => $poliRestoratifi,
            'poliEndodontik'            => $poliEndodontik,
            'poliPeriodontal'           => $poliPeriodontal,
            'poliProstodontik'          => $poliProstodontik,
            'poliEstetikaGigi'          => $poliEstetikaGigi,
            'poliGigiSensitif'          => $poliGigiSensitif,
        ]);
    }
}
