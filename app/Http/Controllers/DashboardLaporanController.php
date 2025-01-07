<?php
namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Log;

class DashboardLaporanController extends Controller
{
    public function index()
    {
        // Mengirimkan data ke view jika diperlukan
        return view('dashboard.laporan.index');
    }

    public function cetaklaporan(Request $request)
    {
        // Menangkap nilai tanggal_antrian dari request
        $tanggal_antrian = $request->input('tanggal_antrian', 'all'); // Default 'all' jika tidak ada pilihan

        // Mengambil data berdasarkan filter tanggal_antrian
        if ($tanggal_antrian == "today") {
            $laporan = Antrian::where('tanggal_antrian', Carbon::now()->toDateString())->where('is_call', 1)->get();
        } elseif ($tanggal_antrian == "week") {
            $laporan = Antrian::whereBetween('tanggal_antrian', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                ->where('is_call', 1)
                ->get();
        } elseif ($tanggal_antrian == "month") {
            $laporan = Antrian::whereMonth('tanggal_antrian', Carbon::now()->month)
                ->where('is_call', 1)
                ->get();
        } else {
            // Semua data jika tidak ada filter atau filter 'all'
            $laporan = Antrian::where('is_call', 1)->get();
        }

        // Membuat PDF dengan data laporan
        $pdf = PDF::loadView('livewire.dashboard.laporan.cetakLaporan', compact('laporan'));
        return $pdf->stream('laporan.pdf');
    }
}
