@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card shadow-lg border-0 rounded-4" style="width: 600px; background-color: #fff0f5;">
        <div class="card-header text-white text-center rounded-top-4 py-3" 
             style="background: linear-gradient(135deg, #ffb6c1, #ff69b4);">
            <h3 class="mb-0">Edit Data Pengguna</h3>
        </div>

        <div class="card-body px-4 py-4">
            <form action="{{ url('/user/' . $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Input Nama --}}
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control shadow-sm" 
                           value="{{ old('nama', $user->nama) }}" required
                           style="border-radius: 10px;">
                </div>

                {{-- Input NPM --}}
                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold">NPM</label>
                    <input type="text" name="npm" id="npm" class="form-control shadow-sm" 
                           value="{{ old('npm', $user->npm) }}" required
                           style="border-radius: 10px;">
                </div>

                {{-- Pilih Kelas --}}
                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select shadow-sm" 
                            style="border-radius: 10px;" required>
                        <option value="" disabled>Pilih Kelas</option>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}" 
                                {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Tombol Aksi --}}
                <div class="text-center">
                    <button type="submit" 
                            class="btn text-white px-4 py-2 shadow-sm fw-semibold"
                            style="background: linear-gradient(135deg, #ff758c); border-radius: 10px;">
                        Simpan Perubahan
                    </button>

                    <a href="{{ url('/user') }}" 
                       class="btn text-white px-4 py-2 ms-2 shadow-sm fw-semibold"
                       style="background: linear-gradient(135deg, #ff758c, #ff7eb3); border-radius: 10px;">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
