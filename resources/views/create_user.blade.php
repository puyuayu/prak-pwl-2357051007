@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="card shadow-lg border-0 rounded-4" style="background-color: #fff0f5;">
        <div class="card-header text-white text-center rounded-top-4 py-3"
             style="background: linear-gradient(135deg, #ffb6c1, #ff69b4);">
            <h3 class="mb-0">Form Pengguna Baru</h3>
        </div>

        <div class="card-body px-5 py-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold text-secondary">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control border-2 rounded-3"
                           placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold text-secondary">NPM</label>
                    <input type="text" id="npm" name="npm" class="form-control border-2 rounded-3"
                           placeholder="Masukkan NPM" required>
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold text-secondary">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select border-2 rounded-3" required>
                        <option value="" selected disabled>Pilih Kelas</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" 
                            class="btn px-4 py-2 text-white rounded-3"
                            style="background-color: #ff69b4; border: none;">
                        Tambah Pengguna
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
