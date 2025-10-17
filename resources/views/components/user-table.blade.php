<div class="card shadow-lg border-0 rounded-4" style="background-color: #fff0f5;">
    <div class="card-header text-white text-center rounded-top-4 py-3" 
         style="background: linear-gradient(135deg, #ffb6c1, #ff69b4);">
        <h3 class="mb-0">Daftar Pengguna</h3>
    </div>

    <div class="card-body">
        <table class="table table-hover align-middle text-center mb-0 rounded-3 overflow-hidden">
            <thead style="background-color: #ffc0cb;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody style="background-color: #fff;">
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="fw-semibold">{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                    <td>
                        {{-- Tombol Edit --}}
                        <a href="{{ url('/user/' . $user->id . '/edit') }}" 
                           class="btn btn-sm text-white fw-semibold shadow-sm me-1"
                           style="background: linear-gradient(135deg, #ff758c, #ff7eb3); border: none; border-radius: 8px;">
                            Edit
                        </a>

                        {{-- Tombol Delete --}}
                        <form action="{{ url('/user/' . $user->id) }}" 
                              method="POST" 
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus {{ $user->nama }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="btn btn-sm fw-semibold text-white shadow-sm"
                                    style="background: linear-gradient(135deg, #b30220ff); border: none; border-radius: 8px;">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer text-center text-secondary" style="background-color: #ffe4ec;">
        Total Pengguna: <strong>{{ $users->count() }}</strong>
    </div>
</div>
