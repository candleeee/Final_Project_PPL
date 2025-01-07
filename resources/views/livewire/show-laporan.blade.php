<?php

namespace App\Http\Livewire;

use App\Models\Antrian;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowLaporan extends Component
{
    use WithPagination;

    public $tanggal_antrian, $poli, $search;
    protected $paginationTheme = 'bootstrap';

    protected $queryString = ['search'];

    public function render()
    {
        // Memulai query dasar
        $query = Antrian::query()->where('is_call', 1);

        // Filter berdasarkan tanggal antrian
        if ($this->tanggal_antrian === 'today') {
            $query->whereDate('tanggal_antrian', Carbon::today());
        } elseif ($this->tanggal_antrian === 'week') {
            $query->whereBetween('tanggal_antrian', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
        } elseif ($this->tanggal_antrian === 'month') {
            $query->whereMonth('tanggal_antrian', Carbon::now()->month);
        }

        // Filter berdasarkan poli
        if ($this->poli) {
            $query->where('poli', $this->poli);
        }

        // Filter berdasarkan nama pasien
        if ($this->search) {
            $query->where('nama', 'like', '%' . $this->search . '%');
        }

        // Ambil hasil query dengan pagination
        $laporan = $query->paginate(10);

        return view('livewire.dashboard.laporan.show-laporan', compact('laporan'));
    }
}
