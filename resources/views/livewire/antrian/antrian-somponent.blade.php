<form wire:submit.prevent="save">
    <div class="mb-3">
        <label for="layanan" class="form-label">Layanan</label>
        <select class="form-select" wire:model="layanan" id="layanan">
            <option value="">Pilih Layanan</option>
            <option value="bpjs">BPJS</option>
            <option value="umum">Umum</option>
        </select>
    </div>

    @if ($layanan == 'bpjs')
        <div class="mb-3">
            <label for="no_bpjs" class="form-label">Nomor BPJS</label>
            <input type="text" class="form-control" wire:model="no_bpjs" id="no_bpjs" placeholder="Masukkan Nomor BPJS" />
            @error('no_bpjs') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    @endif

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
        wire:click="close_modal">Keluar</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
