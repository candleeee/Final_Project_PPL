<div>
    <div class="container">
        <div class="card mt-3" style="height: 550px;">
            <div class="card-body">
                <h5 class="card-title">Poli Pencegahan</h5>

                <!-- Flash Message -->
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <!-- Table Data -->
                <div class="row mt-3">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table_id">
                                <thead class="table-light">
                                    <tr style="text-align: center;">
                                        <th scope="col">No Antrian</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Nomor KTP</th>
                                        <th scope="col">Layanan</th>
                                        <th scope="col">Panggil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($poliPencegahan as $list)
                                    <tr style="text-align: center;">
                                        <td>{{ $list->no_antrian }}</td>
                                        <td>{{ $list->nama }}</td>
                                        <td>{{ $list->alamat }}</td>
                                        <td>{{ $list->jenis_kelamin }}</td>
                                        <td>{{ $list->no_hp }}</td>
                                        <td>{{ $list->no_ktp }}</td>
                                        <td>{{ $list->layanan }}</td>
                                        <td>
                                            <button class="btn btn-success" wire:click="panggilAntrian({{ $list->id }})"
                                                data-bs-toggle="modal" data-bs-target="#panggilAntrianModal">
                                                <i class="bi bi-telephone-forward"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Data tidak tersedia</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- Pagination -->
                            {{ $poliPencegahan->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('livewire.dasboard.daftar-poli.panggilAntrian')
</div>
