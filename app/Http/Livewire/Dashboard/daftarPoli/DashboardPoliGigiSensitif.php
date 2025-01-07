<?php

namespace App\Http\Livewire\Dashboard\DaftarPoli;

use App\Models\Antrian;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardPoliGigiSensitif extends Component
{
    use WithPagination;

    // Mengatur tema pagination
    protected $paginationTheme = 'bootstrap';

    // Mendeklarasikan variabel untuk menyimpan ID antrian yang dipilih
    public $antrian_id;

    // Fungsi untuk memilih antrian yang akan dipanggil
    public function panggilAntrian($antrian_id)
    {
        $this->antrian_id = $antrian_id;
    }

    // Fungsi untuk memperbarui status panggilan antrian
    public function updatePanggilan()
    {
        $antrian = Antrian::find($this->antrian_id);

        // Pastikan antrian ditemukan dan belum dipanggil
        if ($antrian && $antrian->is_call == 0) {
            $antrian->update(['is_call' => 1]);

            // Flash session sukses
            session()->flash('success', 'Berhasil Mengambil Antrian Ini');

            // Menutup modal menggunakan browser event
            $this->dispatchBrowserEvent('closeModal');
        } else {
            // Jika antrian sudah dipanggil atau tidak ditemukan
            session()->flash('error', 'Antrian tidak valid atau sudah dipanggil');
        }
    }

    // Render fungsi untuk mengambil data antrian dan menampilkan view
    public function render()
    {
        $poliGigiSensitif = Antrian::where('poli', 'gigisensitif')
                                   ->where('is_call', 0)
                                   ->paginate(10);

        return view('livewire.dasboard.daftar-poli.dashboard-poli-gigisensitif', compact('poliGigiSensitif'));
    }
}
